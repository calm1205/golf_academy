# ⛳️ After Golf Studio

<br><br>

## ⚙️ 環境構築

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

### tailwindcss の css 監視 & 自動ビルド

```
% npm run tailwind
```

<br><br>

## 📚 関連資料

- [構成案 PDF](https://drive.google.com/drive/folders/1Jwdmr7g_MEQkBJ62GBMSizPQW8D08Y-C)
- [サイトマップ](https://docs.google.com/spreadsheets/d/14-skC5Ch_RSmT0ZnDHErwU-y7SSvTpxOFA4gipYZI6U/edit#gid=1819710037)
- [Figma（未）](#)
- [wordpress site](https://golf.5blocks.jp/)
