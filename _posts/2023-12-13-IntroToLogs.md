---
title: Intro to Logs
author: khafagy
date: 2023-12-12 18:32:00 -0500
categories: [Write-Ups]
tags: [Security Analyst]

---
![image](https://github.com/5afagy/5afagy.github.io/assets/115117722/1a06c0fc-240d-4822-8abd-ccd49d1de42d)

## Introduction

Dive into the basics of log analysis to understand how logs work, where the data comes from, and the methods used to collect it. Learn the essential principles that form the foundation of log analysis.

Explore these concepts in a hands-on way with the resources available at TryHackMe - [Introduction to Logs](https://tryhackme.com/room/introtologs#).

## Task 2 Expanding Perspectives: Logs as Evidence of Historical Activity 

**Step 1:** Start machine 

 <span style="text-align: left; padding-left: 20px; font-size: 20px; width: 100%;">
            <table style="width: 100%; border-spacing: 4px; border-collapse: separate;">
                <tbody>
                    <tr>
                        <td style="width: 110px;"><b>Username</b></td>
                        <td style="background-color: white; border-radius: 5px; padding: 4px; --darkreader-inline-bgcolor: #181a1b;">damianhall</td>
                    </tr>
                    <tr>
                        <td><b>Password</b></td>
                        <td style="background-color: white; border-radius: 5px; padding: 4px; --darkreader-inline-bgcolor: #181a1b;">Logs321!</td>
                    </tr>
                    <tr>
                    </tr>
                </tbody>
            </table>
 </span>
 
Upon accessing the machine, I discovered a note.txt file on the desktop. Upon inspection, I found the solution to the questions in Task 2, which involved identifying the name of the colleague who left the note on the desktop and determining the full path to the suggested log file for initial investigation.

![Screenshot_2023-12-15_00-31-21](https://github.com/5afagy/5afagy.github.io/assets/115117722/172847a4-631c-456f-afbb-2bd7e4955c8e)


---
## Task 3 Types, Formats, and Standards 

The Combined log format, includes extra fields like referrer and user agent. It's commonly used as the default logging format by Nginx.

```bash

damianhall@WEBSRV-02:~/logs$ cat combined.log
34.253.159.159 - adversary [31/May/2023:13:55:36 +0000] "GET /explore HTTP/1.1" 200 4886 "http://gitlab.swiftspend.finance/" "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/115.0"
```
In Task 2, the log file specified belongs to the web server category, evident from the log's content.


Based on the list of log types in this task, what log type is used by the log file specified in the note from Task 2? 

Based on the list of log formats in this task, what log format is used by the log file specified in the note from Task 2?
---
## Task 4 Collection, Management, and Centralisation 

---
## Task 5 Storage, Retention, and Deletion 


---
## Task 6 Hands-on Exercise: Log analysis process, tools, and techniques 




