## Repo for RIM Central internal application 

## setting starting

#### Clone
```
$ git clone https://github.com/tcampbPPU/RimCentral.git

```

Change directory
```
$ cd rim_central
```

Update your Environment File
```
$ cp -rf .env.example .env
```

Install dependencies 
```
$ composer install  && npm instal --save
```
Compile Assets
```
$ npm run dev
```
> Note run   `$ npm run watch  `   to enable hot reloading