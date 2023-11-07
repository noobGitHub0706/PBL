# R.inoue
法政理工情報サイト

## ER図
```mermaid
erDiagram
    CLASS ||--o{ INFORMATION : ""
    CLASS ||--o{ REVIEW : ""
    
    STUDENT {
        int id PK "ユーザーID"
        string username "ユーザー名"
        string email "メールアドレス"
        string password "パスワード"
    }
    CLASS {
        string class PK "授業名"
        string professor_name "教授名"
        string class_information "授業情報"
    }
    INFORMATION {
        string syllabus "シラバス"
        string grading_criteria "評価基準"
        string textbook "教科書"
    }
    REVIEW {
        string username PK "ユーザー名"
        string score "点数"
        string comment "コメント"
        string position "ポジション"
        string path "添付ファイル"
    }

```
