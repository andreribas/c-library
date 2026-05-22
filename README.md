# c-library

A college project that became a framework.

The assignment was straightforward: build a CRUD system for a library catalog. Instead of reaching for Laravel or any existing framework, I used the assignment as an excuse to build a functional MVC framework from scratch — because the actual coursework was too simple to be interesting on its own.

## What it is

A working PHP MVC framework built incrementally, with a simple library management system running on top of it as the demo application.

**The framework includes:**
- A request router
- A lightweight template engine
- A base Model layer with database abstraction
- A Controller structure with lifecycle handling

## Why the git history matters

The early commits are intentional. Each one implements a single piece of the framework — first the router, then the template system, then the model layer, and so on. The commit history was designed to be readable as a step-by-step walkthrough of how an MVC framework comes together from nothing.

If you want to understand how these pieces connect at a fundamental level, reading the commits in order is the point.

## Why build a framework instead of using one?

I already had several years of PHP experience at this point and was using Laravel professionally. The coursework didn't require any of this complexity — a few procedural PHP files would have passed. But building constraints from scratch, even simple ones, is one of the fastest ways to deeply understand why frameworks make the decisions they do.

## Stack

- PHP
- MySQL
- No external dependencies
