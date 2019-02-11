## 習慣化WEBアプリ

#### 目的
- 習慣化をサポートしてくれるアプリを作る

#### どんなアプリか
- 一つのことを集中して習慣化するように設計

#### Controller
- HabitController

#### DB設計
##### Users
- id
- password
- email
- name

##### Habits
- id
- name
- body
- is_turned
- user_id

##### achievementrate
- id
- habit_id
- is_achievement
- date

#### TODO
- [x] Webアプリの設計
- [x] ページの設計
- [x] DB設計
- [x] DB作成、テーブル作成
- [ ] ページ作成
  - [ ] ログイン
  - [ ] ユーザー登録
  - [ ] 習慣一覧
  - [ ] 習慣登録
  - [ ] 習慣削除
  - [ ] 習慣編集
  - [ ] 取り組み中の習慣画面
    - カレンダー表示、実行した日付をチェック
- [ ] ロジック作成
- [ ] テスト
