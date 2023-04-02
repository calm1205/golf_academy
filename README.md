# php_sandbox

<br><br>

## 環境構築

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

<br><br>

## ローカルサーバ起動

```zsh
% php -S localhost:8000
```

```
% open http://localhost:8000
```
