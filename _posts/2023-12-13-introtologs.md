---
title: Intro to Logs
author: khafagy
date: 2023-12-12 18:32:00 -0500
categories: [Write-Ups]
tags: [Security Analyst]

---

# Introduction

In both the physical and digital realms, the concept of growth over time is embodied by the rings of a tree and the logs in a computer system. These logs serve as living records, encapsulating the history and activities within their respective domains.

## Components of a Digital Log

Digital logs are comprehensive records of events within a system, providing intricate details about system activities. A typical log entry includes:

- **Timestamp:** When the event was logged.
- **System or Application Name:** Identifies the origin of the log entry.
- **Event Type:** Describes the nature of the event.
- **Additional Details:** Information such as the user involved or the IP address of the device generating the event.

## The True Power of Logs: Contextual Correlation

While a single log entry might seem inconspicuous, the true power of logs emerges when data is aggregated, analyzed, and cross-referenced. Logs become a potent investigative tool, answering critical questions about an event:

- **What happened?**
- **When did it happen?**
- **Where did it happen?**
- **Who is responsible?**
- **Were their actions successful?**
- **What was the result of their action?**

### Illustrative Scenario

Consider a scenario where a student allegedly accessed inappropriate content on a University network. Analyzing logs, a systems administrator could provide detailed answers:

| Question                   | Answer                                                                                      |
| --------------------------- | -------------------------------------------------------------------------------------------- |
| What happened?              | An adversary accessed SwiftSpend Financial's GitLab instance.                                  |
| When did it happen?         | Access started at 22:10 on Wednesday, September 8th, 2023.                                     |
| Where did it happen?         | The event originated from a device with an IP address of 10.10.133.168 within the VPN Users' segment (10.10.133.0/24). |
| Who is responsible?         | The device, identified by the User-Agent "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/115.0," was allocated the IP address 10.10.133.168. |
| Were they successful?       | Yes, an API Key was found to be publicly exposed on the GitLab instance. The web proxy logs confirm continued access through a web shell. |
| What is the result?          | The adversary achieved remote code execution on gitlab.swiftspend.finance and conducted post-exploitation activities. |

This scenario highlights how logs, when carefully examined and correlated, provide a comprehensive understanding of an event, enabling effective responses and enhancing overall security measures.

![Screenshot_2023-12-14_00_14_35](https://github.com/5afagy/5afagy.github.io/assets/115117722/4b5cde30-30d1-4bc2-90fb-2b6c55df29bb)



# Log Types

### 1. Application Logs
Application logs offer insights into specific applications and their activities. For instance:
```plaintext
2023-10-27 15:43:57 ERROR MyApp[12345]: Database connection failed
```

### 2. Audit Logs
Audit logs track activities related to operational procedures for compliance:
```plaintext
2023-10-27 10:00:00 User JohnDoe accessed critical system file
```

### 3. Security Logs
Security logs monitor events such as logins, permissions changes, and firewall activity:
```plaintext
2023-10-27 12:15:34 Unauthorized login attempt from IP 192.168.1.10
```

### 4. Server Logs
Server logs capture various server activities, including system, event, error, and access logs:
```plaintext
2023-10-27 08:00:00 Server restarted due to low memory
```

### 5. System Logs
System logs track kernel activities, system errors, boot sequences, and hardware status:
```plaintext
2023-10-27 03:00:00 Disk drive temperature exceeded safe threshold
```

### 6. Network Logs
Network logs monitor network traffic, connections, and other related events:
```plaintext
2023-10-27 17:23:12 DNS lookup failure for domain example.com
```

### 7. Database Logs
Database logs record activities within a database system, such as queries and updates:
```plaintext
2023-10-27 14:00:00 User JaneDoe updated customer record with ID 1234
```

### 8. Web Server Logs
Web server logs track requests processed by a web server, including URLs, response codes, etc.:
```plaintext
34.253.159.159 - user1 [27/Oct/2023:11:45:00 +0000] "GET /index.html HTTP/1.1" 200 4096
```

## Log Formats

### 1. Semi-structured
Semi-structured logs combine structured and unstructured data, as seen in Syslog and Windows Event Log:
```plaintext
May 31 12:34:56 WEBSRV-02 CRON[2342593]: (root) CMD ([ -x /etc/init.d/anacron ] && if [ ! -d /run/systemd/system ]; then /usr/sbin/invoke-rc.d anacron start >/dev/null; fi)
```

### 2. Structured
Structured logs follow strict formats for easy parsing, like CSV, JSON, ELF, XML:
```json
{"time":"2023-10-27T16:00:00Z","user":"admin","action":"login","status":200,"ip":"10.0.0.1"}
```

### 3. Unstructured
Unstructured logs are free-form text, as seen in NCSA Common and Combined Log formats:
```plaintext
34.253.159.159 - user2 [27/Oct/2023:12:00:00 +0000] "GET /product/123 HTTP/1.1" 200 2345 "https://www.example.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36"
```

## Log Standards

Understanding log standards is crucial for effective log management. Some notable standards include:

- **Common Event Expression (CEE):** Provides a common structure for easier analysis.
- **OWASP Logging Cheat Sheet:** Guides developers on secure application logging.
- **Syslog Protocol:** A standard for message logging with separation of concerns.
- **NIST SP 800-92:** Guides computer security log management.
- **Cloud-specific guidelines:** For example, Azure Monitor Logs, Google Cloud Logging, etc.

![Screenshot_2023-12-14_14-19-05](https://github.com/5afagy/5afagy.github.io/assets/115117722/99730e21-d76e-44ad-9c67-c9350cb33eeb)

## Log Collection

### Importance
Aggregating logs from diverse sources is paramount for comprehensive analysis, enabling a holistic view of system activities.

### Time Accuracy
Maintaining chronological accuracy is crucial for reconstructing the sequence of events. Utilizing NTP synchronization, as demonstrated below, ensures precise timelines:
```bash
sudo ntpdate pool.ntp.org
```

### Step-by-Step Process
1. **Identify Log Sources**
   Begin by identifying log sources, including servers, databases, applications, and network devices.

2. **Choose a Log Collector Tool**
   Select an appropriate log collector tool based on your system's requirements.

3. **Configure Collection Parameters**
   Fine-tune collection parameters, encompassing NTP settings, event selection, and prioritization.

4. **Test Collection for Completeness**
   Verify the effectiveness of log collection by testing for completeness and accuracy.

## Log Management

### Importance
Log management involves secure storage, organization, and retrieval of logs, ensuring their integrity and accessibility.

### Hybrid Approach
Adopt a hybrid approach to log storage: initially hoard all logs and selectively trim them over time.

### Step-by-Step Process
1. **Choose a Secure Storage Solution**
   Select a secure and scalable storage solution, considering factors like retention and accessibility.

2. **Classify Logs for Easier Access**
   Classify logs based on source, type, or other relevant criteria for streamlined retrieval.

3. **Regularly Back Up Logs**
   Establish a routine for regularly backing up logs to prevent data loss.

4. **Periodically Review Logs**
   Conduct periodic reviews of logs to ensure proper storage, categorization, and compliance.

## Log Centralization

### Importance
Centralizing logs streamlines access, facilitates in-depth analysis, and accelerates incident response.

### Benefits
Realize benefits such as real-time detection, automatic notifications, and seamless integration with incident management tools.

![Screenshot_2023-12-14_14-21-45](https://github.com/5afagy/5afagy.github.io/assets/115117722/a75875fd-07b5-4b01-abb8-f6f1c5c61e92)






