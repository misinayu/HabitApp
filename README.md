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
- on/off
- user_id

##### 習慣達成率
- id
- habit_id
- OK/NG flag
- date
