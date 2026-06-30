pipeline {

    agent any

    environment {
        IMAGE_NAME = "cloudnova"
        IMAGE_TAG = "v1"
        CONTAINER_NAME = "cloudnova-app"
        HOST_PORT = "8081"
        CONTAINER_PORT = "80"
    }

    stages {

        stage('Cleanup Old Image') {
            steps {
                echo "Removing previous Docker image (if it exists)..."
                sh '''
                    docker rmi ${IMAGE_NAME}:${IMAGE_TAG} || true
                '''
            }
        }

        stage('Build Docker Image') {
            steps {
                echo "Building Docker image..."
                sh '''
                    docker build -t ${IMAGE_NAME}:${IMAGE_TAG} .
                '''
            }
        }

        stage('Stop Existing Container') {
            steps {
                echo "Stopping existing container (if running)..."
                sh '''
                    docker stop ${CONTAINER_NAME} || true
                    docker rm ${CONTAINER_NAME} || true
                '''
            }
        }

        stage('Deploy Container') {
            steps {
                echo "Deploying Docker container..."
                sh '''
                    docker run -d \
                    --name ${CONTAINER_NAME} \
                    -p ${HOST_PORT}:${CONTAINER_PORT} \
                    ${IMAGE_NAME}:${IMAGE_TAG}
                '''
            }
        }

        stage('Health Check') {
            steps {
                echo "Verifying application health..."
                sh '''
                    sleep 5
                    curl --fail http://localhost:${HOST_PORT}/health.php
                '''
            }
        }
    }

    post {

        success {
            echo "=========================================="
            echo "✅ Deployment Successful!"
            echo "Application URL:"
            echo "http://<YOUR_PUBLIC_IP>:8081"
            echo "Health Check:"
            echo "http://<YOUR_PUBLIC_IP>:8081/health.php"
            echo "=========================================="
        }

        failure {
            echo "=========================================="
            echo "❌ Deployment Failed!"
            echo "Please check the Jenkins Console Output."
            echo "=========================================="
        }

        always {
            echo "Running Docker Containers:"
            sh 'docker ps -a'
        }
    }
}
