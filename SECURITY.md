# Security

We take security seriously and appreciate your efforts to responsibly disclose vulnerabilities. This document outlines our policy for reporting and addressing security issues in our project.

## Reporting a vulnerability

If you discover a security vulnerability, please report it to us privately and responsibly to ensure the issue is addressed promptly and without unnecessary risk to our users.

### How to report

Send an email to our security team at [eng.gabrielscardoso@gmail.com](mailto:eng.gabrielscardoso@gmail.com).

### Information to include

- **Description:** A detailed description of the vulnerability.
- **Impact:** The potential impact of the vulnerability.
- **Reproduction:** Detailed steps to reproduce the vulnerability.
- **Environment:** Information about the environment where the vulnerability was discovered (e.g., Laravel version, Docker version, browser, etc.).
- **Proof of Concept:** If possible, include a proof of concept demonstrating the vulnerability.

### Response time

We aim to respond to vulnerability reports within 48 hours and provide a detailed response within 5 business days. This response will include our assessment of the report and an expected timeline for a fix.

## Handling a Vulnerability

### Confidentiality

We will keep your report confidential and will not share details of the vulnerability until a fix has been implemented and deployed. We request that you also keep the details of the vulnerability confidential until we have resolved the issue.

### Fixing the issue

Once a vulnerability is reported, we will take the following steps:

1. **Verify:** Verify the vulnerability.
2. **Assess:** Assess the impact and severity.
3. **Develop:** Develop a fix or mitigation.
4. **Test:** Test the fix to ensure it resolves the issue without introducing new vulnerabilities.
5. **Deploy:** Deploy the fix to our production environment.
6. **Notify:** Notify the reporter and relevant stakeholders of the fix.

### Public Disclosure

After the vulnerability has been fixed, we will:

- **Acknowledge:** Acknowledge the reporter's contribution, if they wish to be credited.
- **Disclose:** Publicly disclose the vulnerability, its impact, and the fix implemented. This will typically be done through a security advisory on our GitHub repository and/or website.

## Security best practices

To minimise the risk of vulnerabilities, we follow these security best practices:

- **Code Reviews:** All code changes are reviewed by multiple developers.
- **Testing:** Automated and manual testing is conducted regularly, including security testing with Pest.
- **Dependencies:** We regularly update dependencies to incorporate the latest security patches.
- **Environment:** We follow best practices for securing our Docker environment and AWS services.
- **Access Control:** We enforce strict access control policies to limit access to sensitive data and systems.

## Contact

If you have any questions or need further assistance, please contact our security team at [eng.gabrielscardoso@gmail.com](mailto:eng.gabrielscardoso@gmail.com).

Thank you for helping us keep our community and users safe!
