## Petitio Exponere

### DEPRECATED

This project will be replaced.

### Introduction

Much wow, much awesome!

This project is a proof of concept / makeshift Laravel application in old-school monolithic style.

It's base idea is some years old and will now be put in motion due to it's somewhat necessity.

### Table of Contents

- [Milestones](#Milestones)
- [What it does](#What-it-does)
- [Requirements](#Requirements)
- [Development](#Development)
- [Configuration](#Configuration)
- [Localization](#Localization)
- [Quality Management-ish](#Quality-Management-ish)
- [Localization](#Localization)

### Milestones

#### The Low Hanging Fruits (cough, cough)

1. Docs
    - [ ] The Lay of the Land 
        (Makeshift White Papers for it's few USPs, Database, Modules, anemic APIs)
1. Modules
    - [ ] Implementing/Restructuring Laravel Boilerplate due to `nwidart/laravel-modules`
    - [ ] Implementing of all (current) recognized Modules
    - [ ] Implementing of Module Context Structure (Entities/Repositories/Controller/API/Requests)
1. Module Context (simply defined)
    - [ ] Module Factories+Migration+Seeding created
    - [ ] Module Entities created
    - [ ] Module Repositories created
    - [ ] Anemic Module Controller created
    - [ ] Anemic Module APIs created
    - [ ] Anemic Module APIs created
    - [ ] Anemic Requests created
    - [ ] Anemic, basic Views created
1. Unit Tests
    - [ ] Unit Tests
    - [ ] Feature Tests
    . [ ] Routing Tests 
1. Vue.js (keeping things simple)
    - [ ] Vue.js implementation
    - [ ] Vuex implementation
    - [ ] Modular Module V _u_ ews (hah..)
1.  CSS (SCSS/Stylus+nib)
    - [ ] Setup with Webpack 4
    - [ ] Hopefully it's based on Foundation 6, otherwise it will be Bootstrap 4
    - [ ] Own implementations
    
#### The End Game

1. GitLab
    - Moving zu GitLab, due to M$ noise pollution (and so on).
2. Deployment
    - Docker Image
    - CI (GitLab, Kubernetes, etc.)
3. More..?

### What it does

It's all about job applications.

### Requirements

- Linux (probably)
- `nginx` 1.15.0+
- `PHP` 7.3.0+
- `node` 10.0+
- `npm`/`npx` 6.9.0+ (I guess)
- `mariadb` 10.3.0+ (or an equivalent, slower MySQL Server - or up to you, as far as the migration supports it)

### Development

- You need an Web Server that can interpret PHP (FPM) to load this application
- You need to start npm to build all JS- and CSS-related dependencies (via `npm run development`)
- You need a MySQL database for core data setup (and e.g. Unit Testing if not via SQLite+Memory)

### Configuration

Configuration shall be made via your own build `.env` file.

See `.env.example` for more information.

### Localization

This application will be made available for english and german speakers. 

### Quality Management-ish

As progress moves on I wish to keep things clean via:

- Gitflow (Branching Principle)
- PhpStorm Plugins:
    - Php Annotations
    - Php Inspections
    - PhpUnit Enhancements
    - Prettier
    - SonarLint
- Unit Tests (but not TDD)
- Code Style is PSR-2-ish

### Documentations

#### Official Documentation Of Laravel Boilerplate _(project base)_

This project is based on _Laravel Boilerplate_ (which is based on Laravel 5.7) and has no documentation of it's own (as of yet).

### Licensing

#### License of _Petitio Exponere_ (this project)

Apache License Version 2: [https://choosealicense.com/licenses/apache-2.0/](https://choosealicense.com/licenses/apache-2.0/)

[Click here for the official documentation of Laravel Boilerplate, though](http://laravel-boilerplate.com)

#### License of Laravel Boilerplate _(project base)_

Laravel Boilerplate is based on _Laravel Boilerplate_ by _Anthony Rappa_ which is licensed under MIT.

MIT: [https://anthony.mit-license.org/](https://anthony.mit-license.org/)
