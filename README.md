# R.inoue
法政理工情報サイト

## ER図
```mermaid
erDiagram
    CLASS ||--o{ INFORMATION : ""
    CLASS ||--o{ REVIEW : ""
    
    STUDENT {
        char username PK "ユーザー名"
        char email "メールアドレス"
        char password "パスワード"
    }
    CLASS {
        char class PK "授業名"
        char professor_name "教授名"
        char class_information "授業情報"
    }
    INFORMATION {
        char syllabus "シラバス"
        char grading_criteria "評価基準"
        char textbook "教科書"
    }
    REVIEW {
        char username PK "ユーザー名"
        char score "点数"
        char comment "コメント"
        char position "ポジション"
        char path "添付ファイル"
    }

```
