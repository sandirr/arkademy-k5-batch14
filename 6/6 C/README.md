/////////////////////////////

Jawaban No. 6C

Tampilan awal
![tampilan awal](https://user-images.githubusercontent.com/50796200/73116478-07ecc300-3f72-11ea-9b8e-e11ab9ea5b17.JPG)

Tampilan overlay saat ADD data
![2 tampilan awal add Data](https://user-images.githubusercontent.com/50796200/73116479-0d4a0d80-3f72-11ea-8684-eb8ad48ce9b8.JPG)

Setelah memilih produk, secara otomatis "harga" dan "jenis produk (food/drink)" akan terisi karena menggunakan AJAX
![3 tampilan add data](https://user-images.githubusercontent.com/50796200/73116481-0de2a400-3f72-11ea-864a-efac8a7ddccf.JPG)

Setelah add data, maka data baru akan muncul di beranda/index
![3 setelah add data](https://user-images.githubusercontent.com/50796200/73116480-0d4a0d80-3f72-11ea-8e0c-6c4792dbb2f4.JPG)

Tampilan edit data. Harga dan jenis produk juga terisi secara otomatis dengan AJAX
![4 edit](https://user-images.githubusercontent.com/50796200/73116482-0de2a400-3f72-11ea-9dc6-37cd34862849.JPG)

Setelah edit data, maka data akan berubah sesuai inputan data saat proses edit
![5 setelah edit](https://user-images.githubusercontent.com/50796200/73116483-0de2a400-3f72-11ea-8eed-0521549c4e29.JPG)

Saat ingin hapus data, akan muncul alert untuk memastikan kalau data benar-benar ingin dihapus
![6 hapus data](https://user-images.githubusercontent.com/50796200/73116484-0e7b3a80-3f72-11ea-9e07-8ce4848263b4.JPG)

Setelah data dihapus, akan ditampilkan nama cashier dan id-nya untuk memberi tahu user bahwa data berhasil dihapus
![7 berhasil dihapus](https://user-images.githubusercontent.com/50796200/73116485-0e7b3a80-3f72-11ea-82b1-00a2ce9f7140.JPG)

Tampilan akhir
![tampilan akhir](https://user-images.githubusercontent.com/50796200/73116575-85fd9980-3f73-11ea-836b-61278ac06ccc.JPG)


// menggunakan framework materialize


<p align="center">
  
  <a href="http://materializecss.com/">
    <img src="http://materializecss.com/res/materialize.svg" width="150">
  </a>
</p>

<h3 align="center">MaterializeCSS</h3>

<p align="center">
  Materialize, a CSS Framework based on material design.
  <br>
  <a href="http://materializecss.com/"><strong>-- Browse the docs --</strong></a>
  <br>
  <br>
  <a href="https://travis-ci.org/Dogfalo/materialize">
    <img src="https://travis-ci.org/Dogfalo/materialize.svg?branch=master" alt="Travis CI badge">
  </a>
  <a href="https://badge.fury.io/js/materialize-css">
    <img src="https://badge.fury.io/js/materialize-css.svg" alt="npm version badge">
  </a>
  <a href="https://cdnjs.com/libraries/materialize">
    <img src="https://img.shields.io/cdnjs/v/materialize.svg" alt="CDNJS version badge">
  </a>
  <a href="https://david-dm.org/Dogfalo/materialize">
    <img src="https://david-dm.org/Dogfalo/materialize/status.svg" alt="dependencies Status badge">
    </a>
  <a href="https://david-dm.org/Dogfalo/materialize#info=devDependencies">
    <img src="https://david-dm.org/Dogfalo/materialize/dev-status.svg" alt="devDependency Status badge">
  </a>
  <a href="https://gitter.im/Dogfalo/materialize">
    <img src="https://badges.gitter.im/Join%20Chat.svg" alt="Gitter badge">
  </a>
</p>

## Table of Contents
- [Quickstart](#quickstart)
- [Documentation](#documentation)
- [Supported Browsers](#supported-browsers)
- [Changelog](#changelog)
- [Testing](#testing)
- [Contributing](#contributing)
- [Copyright and license](#copyright-and-license)

## Quickstart:
Read the [getting started guide](http://materializecss.com/getting-started.html) for more information on how to use materialize.

- [Download the latest release](https://github.com/Dogfalo/materialize/releases/latest) of materialize directly from GitHub. ([Beta](https://github.com/Dogfalo/materialize/releases/))
- Clone the repo: `git clone https://github.com/Dogfalo/materialize.git` (Beta: `git clone -b v1-dev https://github.com/Dogfalo/materialize.git`)
- Include the files via [cdnjs](https://cdnjs.com/libraries/materialize). More [here](http://materializecss.com/getting-started.html). ([Beta](https://cdnjs.com/libraries/materialize/1.0.0-beta))
- Install with [npm](https://www.npmjs.com): `npm install materialize-css` (Beta: `npm install materialize-css@next`)
- Install with [Bower](https://bower.io): `bower install materialize` ([DEPRECATED](https://bower.io/blog/2017/how-to-migrate-away-from-bower/))
- Install with [Atmosphere](https://atmospherejs.com): `meteor add materialize:materialize` (Beta: `meteor add materialize:materialize@=1.0.0-beta`)

## Documentation
The documentation can be found at <http://materializecss.com>. To run the documentation locally on your machine, you need [Node.js](https://nodejs.org/en/) installed on your computer.

### Running documentation locally
Run these commands to set up the documentation:

```bash
git clone https://github.com/Dogfalo/materialize
cd materialize
npm install
```

Then run `grunt monitor` to compile the documentation. When it finishes, open a new browser window and navigate to `localhost:8000`. We use [BrowserSync](https://www.browsersync.io/) to display the documentation.

### Documentation for previous releases
Previous releases and their documentation are available for [download](https://github.com/Dogfalo/materialize/releases).

## Supported Browsers:
Materialize is compatible with:

- Chrome 35+
- Firefox 31+
- Safari 9+
- Opera
- Edge
- IE 11+

## Changelog
For changelogs, check out [the Releases section of materialize](https://github.com/Dogfalo/materialize/releases) or the [CHANGELOG.md](CHANGELOG.md).

## Testing
We use Jasmine as our testing framework and we're trying to write a robust test suite for our components. If you want to help, [here's a starting guide on how to write tests in Jasmine](CONTRIBUTING.md#jasmine-testing-guide).

## Contributing
Check out the [CONTRIBUTING document](CONTRIBUTING.md) in the root of the repository to learn how you can contribute. You can also browse the [help-wanted](https://github.com/Dogfalo/materialize/labels/help-wanted) tag in our issue tracker to find things to do.

## Copyright and license
Code Copyright 2018 Materialize. Code released under the MIT license.
