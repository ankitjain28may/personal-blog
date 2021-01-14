---
layout: post
title:  "GSoC 2018 - Blog 2 - Community Bonding"
author: ankit
categories: [ GSoC ]
tags: [Google Summer of Code, Drupal]
image: /assets/drupal/2018-05/Screenshot-2018-5-11-Google-Summer-of-Code(4).png
featured: false
hidden: false
date: 2018-05-09T19:03:16+05:30
---

In my previous blog post **[Google Summer of Code 2018 - Blog 1 - preparation drupal](http://ankitjain28.me/google-summer-code-2018-blog-1-preparation-drupal)**, I have shared how I get started with open source and how I prepared for GSoC'18 in last one month. Finally, the wait is over and the results came out. I am selected in Google Summer of Code 2018 under Drupal Organization. It is one of the happiest moments in my life till now. My attempts/efforts from the first year finally result in a success. I thank each and everyone who helped me on my way to achieving this. A big thanks to my mentors and friends who motivated me and helped me. [Result Page](https://summerofcode.withgoogle.com/projects/#5167774817583104)

### **Project Abstract**

I am working on "**Developing a “ Product Advertising API ” module for Drupal 8**" - [#7](https://groups.drupal.org/node/518074). The “Product Advertising API” which is renamed to "[Affiliates Connect](https://www.drupal.org/project/affiliates_connect)" module provides an interface to easily integrate with affiliate APIs or product advertising APIs provided by different e-commerce platforms like Flipkart, Amazon, eBay etc to fetch data easily from their database and import them into Drupal to monetize your website by advertising their products. If the e-commerce platforms don't provide affiliate APIs, we will scrape the data from such platforms.

### **Community** **Bonding Phase**

Before Coding starts, Around 15-20 days are given to students to get familiar with mentors and organization people. It helps us in discussions and builds a good connection. I created a room on [IRC](#affiliates-connect:matrix.org) and added all the mentors there to discuss things related to project. [Dibyajyoti Panda](https://www.drupal.org/u/dbjpanda), one of my mentor has assigned me a task before the coding phase. As per my task, I have to create a development environment so that it can help developers as well as mentors to review our code easily. I find this idea great and started working on this task.

This project helps in managing Drupal Workflow using [Ansible](https://www.ansible.com/), [Docker](https://docker.com/), [Git](https://git-scm.com/), and [Composer](https://getcomposer.org/). You can manage multiple sites like production/development and staging servers through this project, All your environment will setup, install dependencies and Sync Configuration in a single click.

I have worked on Git and Composer before but Ansible and Docker are like alien technologies for me. I love to explore new technologies so I brewed my coffee and selected my favorite playlist and started learning Ansible and Docker. I find both of them so cool that I am thinking now why I was not aware of such things before. Literally, I am in love with Docker. I want to explore and learn Docker more.

As of now, Most of the work on this project is completed, [Dbjpanda](https://www.drupal.org/u/dbjpanda) is reviewing my code continuously on [Github](https://github.com/dbjpanda/drupal-devops) and suggested improvements on which I am working on. I had a Hangout session with him to show my progress. Continuous Integration and Deployment are also equally important for any good project. I am using Travis CI for it where a user can check whether his tests are working fine/ or his push has broken the code. After the successful build, Travis will deploy the code on the deploying server automatically using Ansible.

**Project Link**

*   This is the project  [https://github.com/dbjpanda/drupal-devops](https://github.com/dbjpanda/drupal-devops) that I am working on, This project template provides a starter kit for managing Drupal Workflow using [Ansible](https://www.ansible.com/), [Docker](https://docker.com/), [Git](https://git-scm.com/), and [Composer](https://getcomposer.org/)

    You can manage multiple sites like production/development and staging servers through this project, All your environment will setup, install dependencies and Sync Configuration in a single click.

*   This is a Dockerfile/image to build a container for nginx, php7.2-fpm, and composer  
    Link -  [https://hub.docker.com/r/ankitjain28/php-nginx-composer/](https://hub.docker.com/r/ankitjain28/php-nginx-composer/)

*   My GSoC project Link - [Affiliates Connect Module](https://www.drupal.org/project/affiliates_connect)

### **Connecting People**

During the preparation for GSoC'18, I was continuously contributing to Drupal queues, writing patches and reviewing patches. Each credit for resolving issues inspires me to work harder. I connected with [Joris Vercammen](https://www.drupal.org/u/borisson_) while writing patches and on request, he reviewed my proposal and his feedbacks helped me in improving my proposal.

I got in touch with other students who get selected in GSoC this year. I talked to [Chiranjeeb Mahanta](https://www.drupal.org/u/chiranjeeb2410) and helped him in installing Drupal with docker through the project I am working on.

While working on the project, I get in touch with [Paritoshik Paul](https://www.linkedin.com/in/paritoshik-paul-681a2758/) on LinkedIn through Dbjpanda. We have a small conversation over this project as Paritoshik has created a similar module in D7 i.e [Flipkart API](https://www.drupal.org/sandbox/paritoshikpaul/2709737) so he is also joining us as a mentor. I also find that  [Getulio Valentin Sánchez](https://www.drupal.org/u/gvso) also wants to mentor this project, so I am trying to get in touch with him. I have sent a mail to him through the Drupal contact form, waiting for his approval. I will work hard and learn new stuff while working with such experienced folks.

### **Mentors in this project**

[Dibyajyoti Panda](https://www.drupal.org/u/dbjpanda)[,](https://www.drupal.org/u/shibasisp) [Shibasis Patel](https://www.drupal.org/u/shibasisp)[,](https://www.drupal.org/u/lal_) [Abhishek Lal](https://www.drupal.org/u/lal_)[,](https://www.linkedin.com/in/paritoshik-paul-681a2758/) [Paritoshik Paul](https://www.linkedin.com/in/paritoshik-paul-681a2758/) are the mentors in this project. I am also in the process to connect with other mentors who have worked in the similar field or module. It would be great if interested members of Drupal community would connect to this project and guide me throughout the project development. IRC link for the project - <span><span dir="auto"><span>[#affiliates-connect:matrix.org](#affiliates-connect:matrix.org)</span></span></span>. Looking for great summer this year :)