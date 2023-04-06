# ⛳️ Golf Academy

<br><br>

## ⚙️ 環境構築

<details>
<summary>git clone</summary>

```zsh
% git clone git@github.com:...
```

</details>

<details>
<summary>homebrewのinstall</summary>

[homebrew サイト](https://brew.sh/index_ja)

```zsh
% /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
```

</details>

<details>
<summary>phpのinstall</summary>

```zsh
% brew install php@8.1php # macのメモリがIntelの場合
% arch -arm64 brew install php@8.1php # macのメモリがM1の場合
```

php のパスを通す。

```zsh
% echo 'export PATH="/opt/homebrew/opt/php@8.1/bin:$PATH"' >> ~/.zshrc
% source ~/.zshrc
```

インストール確認

```zsh
% php -v
PHP 8.1.17 (cli) (built: Mar 16 2023 13:07:08) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.1.17, Copyright (c) Zend Technologies
    with Zend OPcache v8.1.17, Copyright (c), by Zend Technologies
```

</details>

<details>
<summary>nodeのinstall</summary>

[nodebrew](https://github.com/hokaccha/nodebrew)

```zsh
% brew install nodebrew
% echo 'export PATH=$HOME/.nodebrew/current/bin:$PATH' >> ~/.zshrc
% source ~/.zshrc
% nodebrew install v18.15.0
```

インストール確認

```zsh
% nodebrew use v18.15.0
% node -v
v18.15.0
```
npmのパッケージ インストール

```zsh
% npm install
```

</details>

<details>
<summary>vscodeの拡張機能</summary>

- "esbenp.prettier-vscode"
- "bmewburn.vscode-intelephense-client"
- "bradlc.vscode-tailwindcss"

</details>

<br><br>

## 🏌🏻 ローカルサーバ起動

```zsh
% npm run start
```

tailwindcss の css 監視 & 自動ビルド

```
% npm run tailwind
```

<br><br>

## 📚 関連資料

- [構成案 PDF](https://drive.google.com/drive/folders/1Jwdmr7g_MEQkBJ62GBMSizPQW8D08Y-C)
- [サイトマップ](https://docs.google.com/spreadsheets/d/14-skC5Ch_RSmT0ZnDHErwU-y7SSvTpxOFA4gipYZI6U/edit#gid=1819710037)
- [Figma](https://www.figma.com/file/0BYv1VK5o7IA5WMJxJHJJL/%E3%82%B4%E3%83%AB%E3%83%95%E3%83%AC%E3%83%83%E3%82%B9%E3%83%B3%E3%82%B5%E3%82%A4%E3%83%88?node-id=107-533&t=JgVgmltGHdKiIFVI-0)
- [wordpress site](https://golf.5blocks.jp/)
