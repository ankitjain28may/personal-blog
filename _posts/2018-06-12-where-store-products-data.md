---
layout: post
title:  "Where to store product's data?"
author: ankit
categories: [ Drupal ]
tags: [Google Summer of Code, Drupal, PHP]
image: assets/drupal/2018-06/drupal_logo.png
featured: false
hidden: false
date: 2018-06-12T09:43:16+05:30
---

While working on the module "[Affiliates Connect](https://www.drupal.org/project/affiliates_connect)" as a Google Summer of Code student under Drupal, we encountered a situation where we have to store the product's data in the Drupal database and we are confused between nodes and custom content entities.

### **Project Abstract**

I am working on "**Developing a “ Product Advertising API ” module for Drupal 8**" - [#7](https://groups.drupal.org/node/518074). The “Product Advertising API” which is renamed to "[Affiliates Connect](https://www.drupal.org/project/affiliates_connect)" module provides an interface to easily integrate with affiliate APIs or product advertising APIs provided by different e-commerce platforms like Flipkart, Amazon, eBay etc to fetch data easily from their database and import them into Drupal to monetize your website by advertising their products. If the e-commerce platforms don't provide affiliate APIs, we will scrape the data from such platforms.

**About Nodes and Content Entity**

Most content on a Drupal website is stored and treated as "nodes". A node is any piece of individual content, such as a page, poll, article, forum topic, or a blog entry.

Entities, in Drupal, are objects that are used for persistent storage of content and configuration information. Entity Types are used to define custom types of data, content, or configuration which can be used for specific purposes.  The default Content or Node type is an example of an Entity type

**Why Content Entities over Nodes?**

There are many occasions when it makes sense to create your own entity type, by which you can have ultimate flexibility and control on every aspect of data, from display, to saving and editing, custom properties, and integration with other entities. Sometimes you want to store data that will primarily be used in calculations or for storage and is not designed to be the main content item of a web page. Creating your own Entity types allows you to manage the spectrum and synthesis of data vs. content in a website with flexibility and with an eye toward optimized performance.

The default content or Node is also an example of an Entity but Comments/Taxonomy are not defined as nodes, They are defined as an entity. So, Saving product's data as an entity can have various advantages :

- It gives us flexibility and control over the data.

- Many other modules nodes in the most cases, too many contrib, and core modules can integrate with it, which can lead to unnecessary overhead.

- We can use views and search_api_solr and other modules with entities too.

- Nodes are designed to use the power of Drupal, not for developing anything.

- To store millions of product's data as an entity can help us in performing more operations later and adding more features to our module.

- Most of the e-commerce modules in Drupal like [Drupal Commerce](https://www.drupal.org/project/commerce) uses content entities to store product's data.

I have asked the same question in [Drupal@stackexchange,](https://drupal.stackexchange.com/) They are also thinking to use the entities rather using nodes. Link to the question - [Storing data as entity or node?](https://drupal.stackexchange.com/questions/262998/storing-data-as-entity-or-node)

**Conclusion**

After discussing and reading about both of them, I am also thinking to use content entities for storing product's data. Custom Affiliates Product Entity for storing product's data from various vendors is completed and reviewed by [borisson_](https://www.drupal.org/u/borisson_) , [dbjpanda](https://www.drupal.org/u/dbjpanda), and other mentors. Link to the issue - [#2975642.](https://www.drupal.org/project/affiliates_connect/issues/2975642)

The issue is still open for healthy discussion if anyone has any questions regarding the same.