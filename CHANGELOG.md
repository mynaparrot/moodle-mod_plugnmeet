# Changelog

## [3.0.3](https://github.com/mynaparrot/moodle-mod_plugnmeet/compare/v3.0.2...v3.0.3) (2026-04-24)


### Bug Fixes

* added `guest_join` template + missing webhooks ([16530ba](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/16530ba19a6fbffbec1a817bd0bcc6912584824d))
* bump version ([55d23d0](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/55d23d060c1b65cec0fa21bbcf69196b1620ec0c))
* error accessing files during guest user join ([d6b779e](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/d6b779e18f54aea6c12c87e42752ac42dc0eaaea))
* **feat:** added missing whiteboard `preload_file` file option ([3fcbcd1](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/3fcbcd1a48c3b65cd2f20bf3b7ab626ad66c60d7))
* **feat:** added view to display all live active rooms ([7ddc261](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/7ddc261136f14a81e4ef6954e771d2dbd5d42e74))
* invalid type of `creation_time` ([5eb38b5](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/5eb38b560ebb0ab6e63112ee4174630c7ff2d799))
* **locale:** new Crowdin updates ([18d6d80](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/18d6d80ac9eaab8b3b6ea1c601637a901213a72c))
* notification type ([a939d94](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/a939d94707a7ae6992e8c61c1aef2e291b5c6616))
* write logs using moodle event ([a0e421d](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/a0e421d97a11f2effc07ea563c0103c0365b06cd))

## [3.0.2](https://github.com/mynaparrot/moodle-mod_plugnmeet/compare/v3.0.1...v3.0.2) (2026-04-22)


### Bug Fixes

* added clear text messages ([8e260b9](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/8e260b907bcf5ac107757cc61e5eb6a69bcb3b16))
* added more help texts ([d6f8263](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/d6f82631cec56a3a0db530523bca8f859d35b1e4))
* bump SDK ([07cc626](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/07cc62619022a4da2c0bda3b4901a301fb70e721))
* **locale:** new Crowdin updates ([005f5ff](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/005f5ffdec8879921804d4f9ddc0bf6d946e5cc0))
* migrate views to use `mustache` templating ([dea4392](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/dea439201970dde3596844b1b69e710535ec19d6))
* new formated error messages ([5ace281](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/5ace281c3b1998cad96faaa74bedcfcfd0d56c3d))

## [3.0.1](https://github.com/mynaparrot/moodle-mod_plugnmeet/compare/v3.0.0...v3.0.1) (2026-04-21)


### Bug Fixes

* changed maturity to `MATURITY_STABLE` ([85c8151](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/85c8151d856472a03787767ef8c277574be003b8))

## [3.0.0](https://github.com/mynaparrot/moodle-mod_plugnmeet/compare/v2.1.0...v3.0.0) (2026-04-21)


### ⚠ BREAKING CHANGES

* completely redesigned + added new features

### Features

* allow to display self attendance report ([83c07cf](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/83c07cf213d9173cfc1642f5afea0f93588a5135))
* allow to generate guest user to join ([010d3c5](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/010d3c5bdf6abdb86e463001756329e4fc4bfdcb))
* better self attendance report view ([1643732](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/164373211ca78e811773ca56918415b6fe5d38a4))
* completely redesigned + added new features ([40afc8c](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/40afc8c230707ab5b222efb12ef0ac4b393b4e01))


### Bug Fixes

* added better access control ([1e4d4f7](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/1e4d4f72b20fedce0e221b270eb7b78b862a98df))
* added cache + error logging ([96f658e](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/96f658e2e095246ea712096c057908e0f5e0b134))
* added complete status ([d2e0ad7](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/d2e0ad7f276c6b960409ffd7aa188d605d87993d))
* added more activity completion rules ([385ab19](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/385ab19f10bcf68060676c61021074961a16b557))
* added more details track info ([ed98a26](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/ed98a268852a7c50d3ddcf0e50581f3dce4724f6))
* added workflow ([06b332c](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/06b332c02fa43f3215fd1593492d063c80903c73))
* addressed review ([4052c60](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/4052c60d2c4ca44165c3aa982e264996ecff43bb))
* guest_token was resetting during edit ([9f0f971](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/9f0f9716f465c6b5d137d9eb6359545705f078d2))
* implemented MoodleHttpClient ([e625e8e](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/e625e8ef32b3cb73072d2b4ed176819ae9f54a5f))
* initialize `curl` on every request for clean start ([8484813](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/84848138212fbaf81c518635d9970bd1f42739a8))
* **locale:** new Crowdin updates ([db6e074](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/db6e0744f9e9480a79efbe0f6f5a59c4bec2bd87))
* **locale:** new Crowdin updates ([12e2cb4](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/12e2cb46baee564149da40247d54627863aca8e7))
* **locale:** new Crowdin updates ([4ccc4dc](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/4ccc4dc58c4b1e1a0a7475b30dc58c159af96cb5))
* **locale:** new Crowdin updates ([a90c8dc](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/a90c8dcc8d9a822ba1faca3af05f6f1482890293))
* **locale:** new Crowdin updates ([b35bdc3](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/b35bdc39a1b05d2bfb50417b8934ff018d2ac36c))
* **locale:** new Crowdin updates ([8764a23](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/8764a23c4187f4cf9cfdee99522554a53220adb4))
* **locale:** new Crowdin updates ([afbf72e](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/afbf72e35718e791fe6a3c6bd4a57c88886a3852))
* need to import file ([a848296](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/a8482966cf5dc43f6ae785d53d403a7a05150961))
* **refactor:** reworked on attendance logic ([0e8749a](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/0e8749a6e7dac6815c8456509d443d126168a280))
* removed redundant checking ([3a47d42](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/3a47d427b5d29b1bbae61efc4cfea854787cbe3e))
* replace with `clean_string` method ([78091f2](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/78091f2a079d1a52b865e488767c9370fc3959c3))
* required lib not included ([56735f9](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/56735f90fa0f5f69b154e1bb2aedc2c59f06c012))
* separate message provider for recording and artifact to allow set independently ([76a0141](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/76a014170d5c3c76bb06c297ad73578fecbe53c6))
* use activity module id for link + session id userId ([8276d48](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/8276d48176ef0f79239097286b237483556e773f))
* use cron/task to evaluate room status/analytics ([4298af0](https://github.com/mynaparrot/moodle-mod_plugnmeet/commit/4298af071fa1485fd38e6a4919fca65f1f517b9a))
