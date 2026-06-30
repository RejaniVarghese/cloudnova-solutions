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

        stage('Build Docker Image') {
            steps {
                echo "Building Docker Image..."
                sh '''
                    docker build -t ${IMAGE_NAME}:${IMAGE_TAG} .
                '''
            }
        }

        stage('Stop Existing Container') {
            steps {
                echo "Stopping existing container if it exists..."
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
                echo "Checking application health..."
                sh '''
                    sleep 10
                    curl --fail http://localhost:${HOST_PORT}/health.php
                '''
            }
        }
    }

    post {

        success {
            echo "====================================="
            echo "Deployment Successful!"
            echo "Application URL:"
            echo "http://<EC2-PUBLIC-IP>:8081"
            echo "====================================="
        }

        failure {
            echo "====================================="
            echo "Deployment Failed!"
            echo "Check the console output for details."
            echo "====================================="
        }

        always {
            sh 'docker ps -a'
        }
    }
}
