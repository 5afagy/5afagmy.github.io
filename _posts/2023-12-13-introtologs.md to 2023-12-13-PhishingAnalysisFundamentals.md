---
title: Phishing Analysis Fundamentals
author: khafagy
date: 2023-12-12 18:32:00 -0500
categories: [Write-Ups]
tags: [Security Analyst]

---

# Phishing Attack Lab Writeup

## Task 2: Email History

In Task 2, we explore the historical context of email. The invention of the email dates back to the 1970s, marking a significant milestone in communication technology.

![Screenshot_2023-12-14_19_25_14](https://github.com/5afagy/5afagy.github.io/assets/115117722/02b9b747-a9b1-4e60-86f6-23af56f933ba)

**Answer the question:** ```1970s``` 


## Task 3:  Email Delivery 

To comprehend the nuances of various email protocols, we refer to an article. The article highlights that secure IMAP employs port 993, insecure IMAP uses port 143, secure SMTP operates on port 465, and insecure SMTP utilizes ports 587. Similarly, secure POP3 is on port 995, and insecure POP3 employs port 110.

![Screenshot_2023-12-14_19_34_32](https://github.com/5afagy/5afagy.github.io/assets/115117722/82f6df85-1825-4a34-805e-2a4a8f4fbf01)

Article Link: https://help.dreamhost.com/hc/en-us/articles/215612887-Email-client-protocols-and-port-numbers

![Screenshot_2023-12-14_21_24_25](https://github.com/5afagy/5afagy.github.io/assets/115117722/3856d5d0-204d-495f-9e41-85ed6982b0ab)

- **Secure Transport for SMTP:** Port 465
- **Insecure Transport for SMTP:** Port 587

- **Secure Transport for IMAP:** Port 993
- **Insecure Transport for IMAP:** Port 143

- **Secure Transport for POP3:** Port 995
- **Insecure Transport for POP3:** Port 110





## Task 4: Email Header Analysis

Before addressing Task 4 questions, it's imperative to read the provided article on understanding email headers, available at [Media Temple](https://mediatemple.net/community/products/all/204643950/understanding-an-email-header).

also this [Article to view email headers](https://mediatemple.zendesk.com/hc/en-us/articles/204644060-how-do-i-view-email-headers-for-a-message).

### Q1: [Answer in the article]

### Q2: [Answer in the article]

## Task 5: Email Content Examination

Task 5 requires a careful examination of the provided screenshots.

### Q1: In the above screenshots, what is the URI of the blocked image?
Inspect the HTML code segment for the image URI.

### Q2: [Answer within the source code]

### Q3: [Answer using CyberChef or Terminal]

## Task 6: Email Decoding

Upon analyzing the contents of email3.eml, we discover relevant information in its headers. The following details are found:

- Received: from 10.253.62.157 by atlas102.free.mail.gq1.yahoo.com
- In: Sun, 11 Jul 2021 11:48:13
- Return-Path: <support@teckbe.com>
- From: =?UTF-8?B?VGhhbmsgeW91ISBIb21lIERlcG90?= <support@teckbe.com>
- To: alexa@yahoo.com
- Subject: =?UTF-8?B?T3JkZXIgUGxhY2VkIDogWW91ciBPcmRlciBJRCBPRDIzMjE2NTcwODkyOTEgUGxhY2VkIFN1Y2Nlc3NmdWxseQ==?=
- Message-ID: <tkbe_204456168_28443456_28260243_2164817_269_520_5436.1626003191881.com.root@tcbe-236083.teckbe.com>
- X-Complaints-To: <abuse@teckbe.com>
- List-Unsubscribe: http://t.teckbe.com/p/?j3=EOowFcEwFHl6EOAyFcoUFVTVEchwFHlUFOo6MjL6EbTT

Additionally, there is a base64-encoded string. Upon decoding, we find:

```plaintext
Hqh9q7comz8ABZhkUYUnXLmXLhksUBky1IEInhysFNPo5Yl0B6oldn9/jCCe+rJUXDNpOo4W6
KQq2okdMZ8XpIvNEq5yAWboBtBlog+8qYcQPbRjcEToW4kwWdq21D9neKZR/eiiadneR6qjl+RX
YXjVaKA1bDJ1HBZFWx5TakL0hRjzSf8Q/JMVq7kZvOs6UDAwiUltSQ6SSC1KtwDc76MzqHC1bmk
ZGEH2Qm5Z6KpcQULBHj4KKynb13jBRRU5aX/aqGCMC9UIQn+YqyzMqfSz02oKd8hf8Az8pl5lWX
g4lF1c+4rhhJWlNhScA9bcQ9jZezlYaBpsaMr00Ap5XA==
```

Upon decoding, we find answers to the following questions:

### Q1: [Decoded information from the FROM header]
### Q2: [Decoded information from the Return-Path or FROM in the same email]
### Q3: [Decoded information from the Subject]
### Q4: [Information from the email body, defanged as necessary]

With this, we conclude the phishing attack lab. Goodbye.
