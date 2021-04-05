# A Things 3 package for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/vmitchell85/things.svg?style=flat-square)](https://packagist.org/packages/vmitchell85/things)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/vmitchell85/things/run-tests?label=tests)](https://github.com/vmitchell85/things/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/vmitchell85/things/Check%20&%20fix%20styling?label=code%20style)](https://github.com/vmitchell85/things/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/vmitchell85/things.svg?style=flat-square)](https://packagist.org/packages/vmitchell85/things)

This package provides several models for interacting with a Things 3 SQLite database.

## Installation

You can install the package via composer:

```bash
composer require vmitchell85/things
```

Add a config settings with the path to your Things 3 SQLite database:

```ini
THINGS_PATH="/Users/{YOUR_USER_NAME_HERE}/Library/Group Containers/JLMPQHK86H.com.culturedcode.ThingsMac/Things Database.thingsdatabase/main.sqlite"
```

> **Note:** The path listed above is the default as of this writing. Please replace `{YOUR_USER_NAME_HERE}` with the name of the User folder on your system

## Usage

The following models are available with their available relationships:
- `Vmitchell85\Things\Task::class`
    - `rProjects()` - `Vmitchell85\Things\Project::class`
    - `rArea()` - `Vmitchell85\Things\Area::class`
    - `rChecklistItems()` - `Vmitchell85\Things\ChecklistItem::class`
    - `rTags()` - `Vmitchell85\Things\Tag::class`
- `Vmitchell85\Things\Project::class`
    - `rTasks()` - `Vmitchell85\Things\Task::class`
    - `rArea()` - `Vmitchell85\Things\Area::class`
- `Vmitchell85\Things\Area::class`
    - `rTasks()` - `Vmitchell85\Things\Task::class`
    - `rProjects()` - `Vmitchell85\Things\Project::class`
    - `rTags()` - `Vmitchell85\Things\Tag::class`
- `Vmitchell85\Things\Tag::class`
    - `rTasks()` - `Vmitchell85\Things\Task::class`
    - `rAreas()` - `Vmitchell85\Things\Area::class`
- `Vmitchell85\Things\ChecklistItem::class`
    - `rTask()` - `Vmitchell85\Things\Task::class`

More details can be found in the [Wiki](https://github.com/vmitchell85/things/wiki) (*Work In Progress*)

> **Note:** Tables in the Things 3 database, in some instances, have column names that are the same as the desired relation name. To simplify and attempt to prevent confusion it was decided to prefix all relations with `r`. While this 

## Testing

```bash
composer test
```

## Credits

- [Things 3 CLI](https://github.com/alexanderwillner/things.sh)
- [Vince Mitchell](https://github.com/vmitchell85)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
