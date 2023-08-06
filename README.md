# 65130496_CT519_Final  
ศุภิสรา ชีวนันทพร 65130496

## Details :memo: 
- CT519 Final Lab - การสร้าง Web-app อย่างง่าย


การสร้าง Web-app อย่างง่าย โดยใช้งาน Docker / Cloud / Git ในส่วนของ Static Web เลือกใช้ php ในการออกแบบหน้าเว็บ และเลือกใช้ Template free css จาก Theme Chocolate 
Dynamic Web + DB เลือกใช้ MySQL Tool phpMyAdmin

รายละเอียดของหน้าเว็บ สามารถแบ่งออกได้เป็น 4 ส่วน ได้แก่
- Home
- About 
- Research : Motion and Expose Detection for Rhythmic Gymnastics
- My Books : Add New Book / Edit / Delete

## หลักการออกแบบ
Web-app นี้ถูกออกแบบให้มีความเรียบง่ายและมีประสิทธิภาพในการใช้งาน โดยใช้เทคโนโลยี Docker เพื่อรันแอปพลิเคชันบน Container แยกตัวจากระบบปฏิบัติการ ทำให้สามารถนำไปใช้งานในสภาพแวดล้อมที่หลากหลายได้โดยไม่ต้องกังวลเรื่องความแตกต่าง

## สถาปัตยกรรมของระบบ
ระบบประกอบด้วย 2 ส่วนหลัก คือ Web Server และ Database Server

## Web Server
Web Server ถูกสร้างเป็น Docker Container ด้วย Base Image ของ Apache เพื่อรับร้องขอ HTTP และส่งคำตอบกลับ
มีการ Mount Volume เพื่อเชื่อมต่อกับโฟลเดอร์ที่เก็บ Source Code ของ Static Web และ PHP Scripts
Web Server ใช้ Template CSS จาก Theme Chocolate เพื่อให้หน้าเว็บดูสวยงามและน่าสนใจ

## Database Server
Database Server ถูกสร้างเป็น Docker Container ด้วย Base Image ของ MySQL เพื่อใช้เป็นฐานข้อมูลให้กับ Web Server
มีการ Mount Volume เพื่อเก็บข้อมูลในฐานข้อมูลเพื่อให้ข้อมูลยังคงอยู่เมื่อ Container ถูกลบและสร้างใหม่
การออกแบบฐานข้อมูล
ฐานข้อมูลของ Web-app นี้ถูกออกแบบด้วยตารางชื่อ "books" ที่มีโครงสร้างดังนี้:  
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

ในโครงสร้างของระบบนี้ จะมีการเก็บ Source Code ของ Web-app ที่ GitHub เพื่อให้สามารถดึง Source Code ลงเครื่องที่ต้องการได้ นอกจากนี้ การ Deploy Web-app นั้นจะนำขึ้นไปบน EC2 AWS Cloud ซึ่งการใช้ EC2 AWS Cloud โดยใช้ Docker และ Docker Compose จะทำให้คุณสามารถสร้างเซิร์ฟเวอร์หรือแอปพลิเคชันที่มีความซับซ้อนได้ง่ายขึ้น โดย Docker ช่วยให้สามารถแยกแยะและรวมแอปพลิเคชันใน Container และ Docker Compose ช่วยให้คุณกำหนดและจัดการกับ Container ที่มีความเกี่ยวข้องกันได้ง่ายและสะดวกมากขึ้น การใช้ร่วมกันนี้จะทำให้คุณสามารถปรับปรุงการให้บริการและพัฒนาแอปพลิเคชันได้อย่างมีประสิทธิภาพและรวดเร็วยิ่งขึ้น

## การเตรียมการระบบ Cloud
เพื่อให้สามารถรัน Web-app บนระบบ Cloud ของ AWS EC2 ได้ คุณต้องทำตามขั้นตอนนี้:

เช่าเครื่อง EC2 ที่มีคุณสมบัติตามที่กำหนดในโครงสร้างของระบบ (2vCPU, 4GB memory, SSD 20GB)
ติดตั้ง Docker และ Docker Compose บนเครื่อง EC2
Clone Source Code จาก GitHub ไปยังเครื่อง EC2
เตรียมและสร้าง Docker Container ที่รัน Web Server และ Database Server โดยใช้ Docker Compose

## การ Deploy ตัว Code มาทำงาน
เมื่อเตรียมการระบบ Cloud เสร็จสิ้นแล้ว คุณสามารถทำการ Deploy ตัว Code ที่อยู่ใน Docker Container บนระบบ Cloud ได้ด้วย Docker Compose โดยใช้คำสั่งเหมือนที่ได้กำหนดไว้ใน docker-compose.yml ตัวอย่างเช่น:

```
docker-compose up -d
```

คำสั่งนี้จะเริ่มการทำงานของ Web Server และ Database Server ในรูปแบบ Docker Container โดยจะทำให้ Web-app สามารถทำงานบนระบบ Cloud ของ AWS EC2 ได้
