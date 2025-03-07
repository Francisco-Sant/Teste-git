name: Build PHP Workflow
on:
  push:
    branches: [ "develop", "master" ]
  pull_request:
    branches: [ "develop", "master" ]
Jobs:
  build:
    runs-on: 
