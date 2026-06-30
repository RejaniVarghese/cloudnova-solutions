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

---

# ⚠️ Challenges Faced

During the development of this project, I encountered several practical challenges that helped me better understand real-world DevOps workflows.

### Jenkins Integration

- Configuring Jenkins to execute Docker commands without interactive `sudo`.
- Managing Jenkins user permissions for Docker.
- Troubleshooting Jenkins executor availability.

### Docker Deployment

- Building Docker images successfully.
- Managing existing containers before deployment.
- Verifying application deployment inside Docker.

### Application Testing

- Implementing a Health Check endpoint.
- Validating the deployed application after every build.
- Testing container accessibility using browser and terminal.

### Git & GitHub

- Managing project versions using Git.
- Updating the Jenkins pipeline after repository changes.
- Maintaining a clean project structure for GitHub.

---

# 📚 Learning Outcomes

Through this project, I gained practical experience in:

- Linux Administration
- AWS EC2 Management
- Git & GitHub
- Docker Containerization
- Jenkins CI/CD Pipelines
- PHP Application Deployment
- Health Check Implementation
- Container Lifecycle Management
- CI/CD Troubleshooting
- Professional GitHub Repository Management

---

# 🚀 Future Enhancements

This project can be extended further by implementing:

- GitHub Webhooks for automatic builds
- HTTPS using Let's Encrypt
- Terraform for Infrastructure as Code
- Prometheus Monitoring
- Grafana Dashboard
- AWS Application Load Balancer
- Auto Scaling Group
- Amazon RDS Integration
- Kubernetes Deployment
- GitHub Actions CI/CD

---

# 📸 Project Screenshots

The following screenshots demonstrate the application, CI/CD pipeline, and deployment process.

| Screenshot | Description |
|------------|-------------|
| Home Page | Responsive CloudNova Solutions website |
| Jenkins Pipeline | Successful CI/CD pipeline execution |
| Docker Container | Running application container |
| AWS EC2 | Cloud deployment environment |
| Health Check | Application health verification |
| Contact Page | Contact form interface |
| Status Page | Application status dashboard |

> Screenshots will be added in a future update.

---

# 👩‍💻 Author

**Rejani Mary Varghese**

Cloud & DevOps Engineer

### Connect with me

- LinkedIn: *(Add your LinkedIn profile URL here)*
- GitHub: *(Add your GitHub profile URL here)*

---

# 🙏 Acknowledgements

This project was developed as part of my Cloud & DevOps learning journey to gain hands-on experience with AWS, Docker, Jenkins, Git, GitHub and Linux.

Special thanks to the open-source community for providing excellent tools and documentation that made this project possible.
