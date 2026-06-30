<div align="center">

# ☁️ CloudNova Solutions

### Cloud & DevOps CI/CD Project using AWS, Docker, Jenkins & GitHub

A beginner-friendly end-to-end Cloud & DevOps project demonstrating Continuous Integration and Continuous Deployment (CI/CD) using **AWS EC2**, **Docker**, **Jenkins**, **GitHub**, and **PHP**.

</div>

---

<p align="center">

<img src="assets/project-overview.png" width="900">

</p>

---

## 📖 Project Overview

CloudNova Solutions is a fictional cloud consulting company developed as a hands-on Cloud & DevOps project.

The objective of this project was to deploy a PHP application on AWS EC2, containerize it using Docker, automate deployment using Jenkins, and manage the source code with GitHub.

This project demonstrates a complete CI/CD workflow while following industry-standard DevOps practices.

---

## 🚀 Project Highlights

- Dockerized PHP Application
- Jenkins CI/CD Pipeline
- AWS EC2 Deployment
- GitHub Integration
- Automated Container Deployment
- Health Check Endpoint
- Responsive Multi-Page Website

---

# 🛠️ Technology Stack

| Technology | Purpose |
|------------|---------|
| ☁️ AWS EC2 | Cloud Hosting |
| 🐧 Amazon Linux 2023 | Operating System |
| 🐘 PHP | Backend Development |
| 🐳 Docker | Application Containerization |
| ⚙️ Jenkins | Continuous Integration & Continuous Deployment |
| 🌐 Git | Version Control |
| 📂 GitHub | Source Code Repository |
| 💻 HTML5 | Web Page Structure |
| 🎨 CSS3 | Website Styling |

---

# 🏗️ Solution Architecture

The application follows a simple CI/CD workflow where every code update is version-controlled, built into a Docker image, and deployed automatically to an AWS EC2 instance using Jenkins.

```text
                 Developer
                     │
                     ▼
              GitHub Repository
                     │
                     ▼
            Jenkins CI/CD Pipeline
                     │
                     ▼
          Build Docker Image
                     │
                     ▼
        Deploy Docker Container
                     │
                     ▼
       AWS EC2 (Amazon Linux 2023)
                     │
                     ▼
         CloudNova Solutions Website
```

---

# ✨ Features

- 🚀 Responsive multi-page PHP website
- 🐳 Dockerized application deployment
- ⚙️ Jenkins CI/CD Pipeline
- ☁️ AWS EC2 hosting
- 🌐 GitHub source control
- ❤️ Health Check endpoint
- 📊 Application Status page
- 📞 Contact page
- 🔄 Automated Docker deployment
- 📱 Responsive design

---

# 📂 Project Structure

```text
cloudnova-solutions/

├── assets/
│   └── screenshots/

├── css/
│   └── style.css

├── docs/

├── diagrams/

├── includes/
│   ├── header.php
│   └── footer.php

├── index.php
├── about.php
├── services.php
├── pricing.php
├── contact.php
├── status.php
├── health.php

├── Dockerfile
├── Jenkinsfile

└── README.md
```

---

# ⚙️ Installation Guide

## Clone the Repository

```bash
git clone https://github.com/<YOUR_GITHUB_USERNAME>/cloudnova-solutions.git
```

Navigate to the project directory.

```bash
cd cloudnova-solutions
```

---

## Build the Docker Image

```bash
docker build -t cloudnova:v1 .
```

---

## Run the Docker Container

```bash
docker run -d \
--name cloudnova-app \
-p 8081:80 \
cloudnova:v1
```

---

## Access the Application

Open your browser and visit:

```text
http://<EC2-PUBLIC-IP>:8081
```

---

## Health Check

Verify the application is running correctly.

```text
http://<EC2-PUBLIC-IP>:8081/health.php
```

---

## Status Page

View the application status.

```text
http://<EC2-PUBLIC-IP>:8081/status.php
```

---

# 🚀 CI/CD Workflow

```text
Developer

        │

        ▼

Git Commit

        │

        ▼

Git Push

        │

        ▼

GitHub Repository

        │

        ▼

Jenkins Pipeline

        │

        ▼

Build Docker Image

        │

        ▼

Deploy Docker Container

        │

        ▼

Health Check

        │

        ▼

CloudNova Website Available
```
