﻿# 65130496_CT519_Final  

## Details :memo:
- CT519 Final Lab - การสร้าง Web-app อย่างง่าย
ศุภิสรา ชีวนันทพร 65130496

การสร้าง Web-app อย่างง่าย โดยใช้งาน Docker / Cloud / Git ในส่วนของ Static Web เลือกใช้ php ในการออกแบบหน้าเว็บ และเลือกใช้ Template free css จาก Theme Chocolate 
Dynamic Web + DB เลือกใช้ MySQL Tool phpMyAdmin

รายละเอียดของหน้าเว็บ สามารถแบ่งออกได้เป็น 4 ส่วน ได้แก่
- Home
- About 
- Research 
- My Books

และโครงสร้างของข้อมูล
```sql
CREATE TABLE books (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  author VARCHAR(100) NOT NULL,
  publication_date DATE,
  genre VARCHAR(50),
  description TEXT
);
```


เมื่อทำหลังบ้าน และ Static web เสร็จ นำ SourceCode ไปขึ้น GitHub
