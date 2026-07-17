---
name: crm-package-development
description: Use when creating a new Maya CRM package or module, extending CRM functionality via a package, or adding custom business logic without modifying core files. Covers Laravel package structure, service providers, migrations, models, repositories, routes, controllers, views, config, ACL, and menus.
---

# Skill: CRM Package Development (Maya CRM)

## Purpose
This skill guides the AI agent to design and develop a new CRM package
(module) for Maya CRM in a clean, upgrade-safe, and maintainable way.

---

## When to Activate
Activate this skill when the user wants to:
- Create a new CRM package/module
- Extend CRM functionality via a package
- Add custom business logic without modifying core files

---

## Project Context
- Framework: Laravel
- Product: Maya CRM
- Maya CRM is already installed and running
- The package must integrate seamlessly with existing CRM modules

---

## Development Rules
- Follow Maya CRM architecture and conventions
- Do NOT modify core Maya files unless explicitly required
- Use Laravel package-based structure
- All database changes must be done using migrations
- Ensure backward compatibility and safe upgrades

---

## Package Structure Guidelines

A CRM package should follow this structure:

```text
packages/
└── Maya/
    └── PackageName/
        ├── src/
        │   ├── Providers/
        │   │   └── PackageServiceProvider.php
        │   ├── Models/
        │   ├── Contracts/
        │   ├── Repositories/
        │   ├── Http/
        │   │   ├── Controllers/
        │   │   └── Requests/
        │   ├── Routes/
        │   │   ├── admin.php
        │   │   └── api.php
        │   ├── Database/
        │   │   └── Migrations/
        │   ├── Resources/
        │   │   └── views/
        │   └── Config/
        │       └── package.php
        │       ├── menu.php
        │       ├── core_config.php
        │       └── acl.php
        └── composer.json