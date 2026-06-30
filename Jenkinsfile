pipeline {

    agent any

    stages {

        stage('Build Docker Image') {

            steps {

                sh 'sudo docker build -t cloudnova:v1 .'

            }

        }

        stage('Stop Existing Container') {

            steps {

                sh '''
                sudo docker stop cloudnova-app || true
                sudo docker rm cloudnova-app || true
                '''

            }

        }

        stage('Deploy Container') {

            steps {

                sh '''
                sudo docker run -d \
                --name cloudnova-app \
                -p 8081:80 \
                cloudnova:v1
                '''

            }

        }

        stage('Health Check') {

            steps {

                sh '''
                sleep 10
                curl http://localhost:8081/health.php
                '''

            }

        }

    }

}
