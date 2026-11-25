# Directorist Settings Tools

A temporary WordPress admin workaround for the large gap above **Directorist → Settings**. The issue was observed with Directorist 8.12 and Advanced Ads 2.0.26.

Advanced Ads can output an empty admin notice wrapper. The affected Directorist stylesheet gives that wrapper a viewport-sized height, pushing the Settings panel below the fold. This plugin loads a small CSS rule only on the Directorist Settings screen to hide empty wrappers.

## Install

1. Download `directorist-settings-tools.zip` from GitHub Releases.
2. In WordPress, go to **Plugins → Add New Plugin → Upload Plugin**.
3. Upload the ZIP and activate **Directorist Settings Tools**.
4. Open **Directorist → Settings** and confirm the panel appears at the top while Advanced Ads is active.

After installing a Directorist build that fixes the wrapper styling, deactivate and remove **Directorist Settings Tools**.

## License

[GPL-2.0-or-later](LICENSE).
