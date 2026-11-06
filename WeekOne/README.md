# Week One — Introduction to PHP & MySQL

> This README summarizes the main concepts covered in **Chapter 1: Introduction to PHP & MySQL**. It focuses on the ideas introduced in the chapter and does not include code examples.

---

## Table of Contents

1. [Introduction to Web Application Development](#1-introduction-to-web-application-development)
2. [Course Objectives](#2-course-objectives)
3. [What Is PHP?](#3-what-is-php)
4. [HTTP and HTML](#4-http-and-html)
5. [Client and Server](#5-client-and-server)
6. [What Can PHP Do?](#6-what-can-php-do)
7. [Key PHP Features](#7-key-php-features)
8. [What You Should Know Before Starting](#8-what-you-should-know-before-starting)
9. [Development Tools and Environment](#9-development-tools-and-environment)
10. [XAMPP and Other Server Packages](#10-xampp-and-other-server-packages)
11. [Localhost and the Document Root](#11-localhost-and-the-document-root)
12. [Ports and Server Testing](#12-ports-and-server-testing)
13. [The Index Page](#13-the-index-page)
14. [Program Editors](#14-program-editors)
15. [Types of Websites and Platforms](#15-types-of-websites-and-platforms)
16. [Chapter Summary](#16-chapter-summary)

---

## 1. Introduction to Web Application Development

Web application development is the process of creating websites and applications that people access through a web browser. Some websites mainly display information, while others respond to users, process information, and work with stored data.

This course introduces technologies used to create dynamic websites and web applications, including **HTML, CSS, PHP, MySQL, JavaScript, and jQuery**.

## 2. Course Objectives

The course aims to help students understand how to:

- Develop dynamic and interactive web applications with PHP and MySQL.
- Apply basic PHP programming concepts.
- Create and validate web forms.
- Use jQuery, AJAX, and JSON for interactive features.
- Design databases and perform SQL operations with MySQL.
- Build applications that create, read, update, and delete data (CRUD).
- Develop and use RESTful APIs.
- Apply sessions, authentication, authorization, and basic security.
- Understand MVC, modern PHP practices, and introductory Laravel concepts.
- Design, develop, test, and present a complete PHP and MySQL application.

## 3. What Is PHP?

**PHP** stands for **PHP: Hypertext Preprocessor**. It is a server-side scripting language commonly used to create dynamic and interactive web pages.

PHP code runs on the web server rather than directly in the visitor's browser. The server processes the PHP instructions and sends a response—often HTML—to the browser. PHP can also work with databases such as MySQL to create database-driven applications.

PHP is widely used, free to use, and supported by many operating systems and web servers.

## 4. HTTP and HTML

### HTTP — Hypertext Transfer Protocol

HTTP defines how a browser and a web server communicate through requests and responses.

### HTML — Hypertext Markup Language

HTML provides the structure of a web page that a browser displays.

**In short:** HTTP handles communication, while HTML describes the content and structure of a page. Routers, proxies, and gateways may also help transfer requests and responses between a client and a server.

## 5. Client and Server

- **Client:** The device or application that requests a service. In web development, the browser is usually the client.
- **Web server:** Receives client requests and sends back an appropriate response, such as a web page.
- **Request:** A message sent by the client asking for a resource or service.
- **Response:** The server's reply to the request.

### Request and Response Process

1. A visitor enters a web address or follows a link.
2. The browser sends a request to the web server.
3. The server processes the request. If the page uses PHP, the PHP code is executed on the server.
4. The server sends the result back to the browser.
5. The browser displays the page. Normally, the browser receives the generated result, not the server-side PHP instructions themselves.

## 6. What Can PHP Do?

PHP can be used for many server-side tasks, including:

- Generating page content that changes based on a user's request.
- Collecting and processing form information.
- Creating personalized user experiences.
- Building shopping carts and other e-commerce features.
- Connecting to databases and working with stored information.
- Supporting websites, web tools, and APIs.
- Handling server-side operations such as file processing.

These capabilities make PHP useful for both small websites and larger web applications.

## 7. Key PHP Features

The chapter introduces these major PHP features:

- **Server-side execution:** PHP instructions are processed on the server.
- **Database connectivity:** PHP can work with MySQL and other databases.
- **Procedural programming:** Programs can be organized as sequences of instructions and functions.
- **Object-oriented programming:** Programs can be organized around objects and classes.
- **Form processing:** PHP can receive and process information submitted through web forms.
- **Session and cookie management:** Websites can maintain information related to a user's activity.
- **File handling:** PHP can work with files on the server.
- **Error handling:** Applications can detect and manage errors.
- **API development:** PHP can provide services and data to other applications.
- **Framework support:** Frameworks such as Laravel help organize application development.

## 8. What You Should Know Before Starting

The chapter recommends having:

- A basic understanding of HTML syntax, especially HTML forms.
- Basic programming knowledge.

These foundations help students understand how web pages are structured and how programming instructions work.

## 9. Development Tools and Environment

A local PHP development environment lets students create and test a website on their own computers before publishing it online.

The chapter introduces the following tools and components:

- **Operating system:** The environment in which development tools run.
- **Apache:** A web server that can receive requests and serve web pages.
- **PHP:** The language runtime that executes PHP scripts.
- **MySQL:** A database management system used to store and retrieve data.
- **Code editor:** A program used to create and edit files. The course uses Visual Studio Code.
- **Web browser:** Used to open and test web pages.
- **Git and GitHub:** Tools and services for version control, collaboration, and storing project code.

## 10. XAMPP and Other Server Packages

XAMPP provides a local development environment that includes Apache, MariaDB (commonly used in place of MySQL in XAMPP packages), PHP, and Perl. It helps developers run and test PHP projects locally.

The chapter also mentions:

- **WAMP:** A web development stack designed for Windows.
- **LAMP:** A web development stack commonly used on Linux.
- **MAMP:** A web development stack commonly associated with macOS.
- **XAMPP:** A cross-platform package available for Windows, Linux, and macOS.

HTML pages can be opened directly in a browser, but PHP needs a PHP-capable server environment to execute properly.

## 11. Localhost and the Document Root

**Localhost** refers to the computer being used as the local server. The address `127.0.0.1` is also commonly used to refer to the local computer.

The **document root** is the server directory from which website files are served. In a standard XAMPP installation on Windows, this directory is usually `C:\xampp\htdocs`.

Projects placed in the document root can be accessed through a local browser address. The folder path after the document root is reflected in the URL, but the document-root directory name itself is normally omitted.

## 12. Ports and Server Testing

A **port** is a numbered communication endpoint used by a computer service. Apache commonly uses port **80** for HTTP by default, but another application may already be using that port.

If the default port is occupied, Apache may need to be configured to use another port, such as **8080**. The port number must then be included in the local browser address when accessing the server.

Testing the local server confirms that the web server is running and that the browser can reach it.

## 13. The Index Page

An **index page** is the default page a web server loads when a visitor opens a directory without specifying a particular file.

For example, a project may use an `index.php` page as its default page. This allows a visitor to open the project's directory URL without typing the index filename separately.

## 14. Program Editors

A program editor is an application used to write and manage source files. The chapter mentions editors such as:

- Notepad
- Notepad++
- Sublime Text
- Visual Studio Code

More advanced editors and IDEs can provide syntax highlighting, autocomplete, code suggestions, debugging support, and easier code navigation. The course uses **Visual Studio Code**.

## 15. Types of Websites and Platforms

The chapter identifies several common website categories:

- Social media
- E-commerce
- Blogs and content management systems (CMS)
- Search engines
- Knowledge bases
- E-learning platforms
- Entertainment websites

PHP can be used to build dynamic features for many kinds of websites and online services.

## 16. Chapter Summary

Chapter 1 introduces the basic environment and ideas behind PHP web development. The main concepts are:

- The roles of HTML and HTTP.
- How clients and servers communicate.
- How PHP generates dynamic responses.
- What PHP can do and its key features.
- The tools used to develop and test a website locally.
- The purpose of a local server environment such as XAMPP.

After completing this chapter, students should be able to explain the purpose of PHP, describe the browser–server request and response process, identify the main development tools, and understand the purpose of a local server such as XAMPP.

---

*Week One — PHP & MySQL Learning Notes*
