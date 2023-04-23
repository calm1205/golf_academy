# ⛳️ Golf Academy

- [プロジェクトボード](https://github.com/users/calm1205/projects/5)
- [開発手順](https://github.com/calm1205/golf_academy/wiki/%E9%96%8B%E7%99%BA%E6%89%8B%E9%A0%86)
- [tailwindcss公式](https://tailwindcss.com/docs/installation)
- [tailwindcssとはなにか](https://github.com/calm1205/golf_academy/wiki/Tailwindcss)
- [tailwindcss cheetsheet](https://nerdcave.com/tailwind-cheat-sheet)

styleの適応は`tailwindcss`を採用した。


<br><br>

## ⚙️ 環境構築

<details>
<summary>Local</summary>
[Local](https://localwp.com/)(wordpressをローカル起動できるアプリケーション)のinstall
</details>

<details>
<summary>git clone</summary>

```zsh
% cd ./Local Sites/golfacademy/app/public/wp-content/themes
% git clone ...
```

</details>

<details>
<summary>npm install</summary>

```zsh
% cd ./Local Sites/golfacademy/app/public/wp-content/themes/golf_academy
% npm install
% npm run tailwind # cssのbuild. tailwind.cssというファイルが生成されればOK
```

</details>

<details>
<summary>wordpressのテーマ適応</summary>

外観 > テーマ > AfterGolfStudioThemeを選択

</details>

<details>
<summary>vscodeの拡張機能</summary>

- "esbenp.prettier-vscode"
- "bmewburn.vscode-intelephense-client"
- "bradlc.vscode-tailwindcss"

</details>

<br><br>

## 📚 関連資料

- [構成案 PDF](https://drive.google.com/drive/folders/1Jwdmr7g_MEQkBJ62GBMSizPQW8D08Y-C)
- [サイトマップ](https://docs.google.com/spreadsheets/d/14-skC5Ch_RSmT0ZnDHErwU-y7SSvTpxOFA4gipYZI6U/edit#gid=1819710037)
- [Figma](https://www.figma.com/file/0BYv1VK5o7IA5WMJxJHJJL/%E3%82%B4%E3%83%AB%E3%83%95%E3%83%AC%E3%83%83%E3%82%B9%E3%83%B3%E3%82%B5%E3%82%A4%E3%83%88?node-id=107-533&t=JgVgmltGHdKiIFVI-0)
- [wordpress site](https://golf.5blocks.jp/)
