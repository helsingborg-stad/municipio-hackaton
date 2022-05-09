<!-- SHIELDS -->
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![License][license-shield]][license-url]

<p>
  <a href="https://github.com/helsingborg-stad/municipio-hackaton">
    <img src="images/hbg-github-logo-combo.png" alt="Logo" width="300">
  </a>
</p>
<h1>Municipio Hackaton edition</h1>
<p>
  Docker environment for Municipio
  <br />
  <a href="https://github.com/helsingborg-stad/municipio-hackaton/issues">Report Bug</a>
  ·
  <a href="https://github.com/helsingborg-stad/municipio-hackaton/issues">Request Feature</a>
</p>

## Requirements
[Docker]([https://www.docker.com/)  
[Advanced custom fields Pro](https://www.advancedcustomfields.com/pro/)
## How to 
```
HOWTO
cd docker/php-fpm/app
composer install --prefer-source
php build.php
wget "{acf-link}" -O acf.zip
unzip acf.zip -d wp-content/plugins/
rm acf.zip
cd ..
cd ..
docker-compose up -d
docker exec -it docker-mysql-1  mysql -uroot -proot -e "CREATE DATABASE municipio /*\!40100 DEFAULT CHARACTER SET utf8 */;"
```
goto https://localhost/ and install wordpress
```
docker exec -it docker-php-fpm-1 wp plugin activate advanced-custom-fields-pro --allow-root
```

## Roadmap

See the [open issues][issues-url] for a list of proposed features (and known issues).



## Contributing

Contributions are what make the open source community such an amazing place to be learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request



## License

Distributed under the [MIT License][license-url].



## Acknowledgements

- [othneildrew Best README Template](https://github.com/othneildrew/Best-README-Template)



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/helsingborg-stad/municipio-hackaton.svg?style=flat-square
[contributors-url]: https://github.com/helsingborg-stad/municipio-hackaton/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/helsingborg-stad/municipio-hackaton.svg?style=flat-square
[forks-url]: https://github.com/helsingborg-stad/municipio-hackaton/network/members
[stars-shield]: https://img.shields.io/github/stars/helsingborg-stad/municipio-hackaton.svg?style=flat-square
[stars-url]: https://github.com/helsingborg-stad/municipio-hackaton/stargazers
[issues-shield]: https://img.shields.io/github/issues/helsingborg-stad/municipio-hackaton.svg?style=flat-square
[issues-url]: https://github.com/helsingborg-stad/municipio-hackaton/issues
[license-shield]: https://img.shields.io/github/license/helsingborg-stad/municipio-hackaton.svg?style=flat-square
[license-url]: https://raw.githubusercontent.com/helsingborg-stad/municipio-hackaton/master/LICENSE




