# 투밋네이버(To meet Neighbor)

PHP를 사용한 유저 커뮤니티 사이트

# 개발 목표(필요성)

코로나로 인해 여러 활동이 제한된 학생들에게 정보 공유, 스터디 구인, 소통의 장 마련 등 여러 기능을 제공하는 사이트를 만들기로 했습니다.

# 개발 시스템 개요

## 개요

**Title - 투밋네이버(To meet Neighbor)**<br>
PHP를 사용하여 로그인, 로그아웃, 게시판, 글쓰기 등 커뮤니티 사이트 기능을 구현해보자

## 구성

### Frame

#### 메인화면

- [ ] 투두리스트
- [ ] 시계
- [ ] 날씨
- [ ] 주간 인기글(5개)
- [ ] 커뮤니티(10개)
- [ ] 최근메일(5개)

#### 로그인 / 로그아웃

- [ ] Form(label)양식(POST)
- [ ] 카카오로 로그인

#### 회원가입

- [ ] Form(label)양식
- [ ] 카카오로 가입

#### 메일

- [ ] 메일쓰기
- [ ] 보관함

#### 커뮤니티

- [ ] 게시판
- [ ] 글쓰기
- [ ] 댓글

#### 검색

- [ ] Form(input)양식(GET)

### Database

#### user 테이블

| 필드명        | 데이터명 | null     | 추가 사항       | 설명          |
| :------------ | -------- | -------- | --------------- | :------------ |
| num           | int      | not null | **primary key** | 사용자 넘버   |
| id            | char(20) | not null |                 | 아이디        |
| name          | char(20) | not null |                 | 이름          |
| gender        | char(1)  | null     |                 | 성별          |
| post_num      | char(8)  | null     |                 | 우편번호      |
| address       | char(40) | null     |                 | 이메일 주소   |
| kakao_address | char(40) | null     |                 | 카카오 이메일 |
| tel           | char(20) | null     |                 | 전화번호      |
| age           | int      | null     |                 | 나이          |
| role          | char     | not null |                 | 역할(우선도)  |
| user_mail_no  | int      | not null | **foreign key** | 메일 넘버     |
| user_post_no  | int      | not null | **foreign key** | 게시글 넘버   |

#### post 테이블

| 필드명            | 데이터명   | null     | 추가 사항       | 설명             |
| :---------------- | ---------- | -------- | --------------- | :--------------- |
| num               | int        | not null | **primary key** | 게시글 넘버      |
| title             | char(100)  | not null |                 | 게시글 제목      |
| content           | char(4000) | not null |                 | 게시글 내용      |
| option            | char       | not null |                 | 게시글 옵션      |
| post_user_no      | int        | not null | **foreign key** | 작성자 넘버      |
| post_comment_list | list(int)  | not null | **foreign key** | 댓글 넘버 리스트 |

#### comment 테이블

| 필드명          | 데이터명   | null     | 추가 사항       | 설명        |
| :-------------- | ---------- | -------- | --------------- | :---------- |
| num             | int        | not null | **primary key** | 댓글 넘버   |
| content         | char(1000) | not null |                 | 댓글 내용   |
| option          | char       | not null |                 | 댓글 옵션   |
| comment_user_no | int        | not null | **foreign key** | 작성자 넘버 |
| comment_post_no | int        | not null | **foreign key** | 게시글 넘버 |

#### mail 테이블

| 필드명       | 데이터명   | null     | 추가 사항       | 설명        |
| :----------- | ---------- | -------- | --------------- | :---------- |
| num          | int        | not null | **primary key** | 메일 넘버   |
| sender       | char(40)   | not null |                 | 송신 주소   |
| title        | char(100)  | not null |                 | 메일 제목   |
| content      | char(4000) | not null |                 | 메일 내용   |
| option       | char       | not null |                 | 메일 옵션   |
| mail_user_no | int        | not null | **foreign key** | 사용자 넘버 |

<br>

# 개발 환경

## H/W 및 S/W 환경

- Microsoft Windows10
- Visual Studio Code

## 사용 언어

- HTML/CSS
- PHP
- JS

## 업무 분담

- Backend(기능)

  - cydonia0211

- Frontend(디자인)
  - FIN443
- Database
  - cydonia0211
  - FIN443

## 개발 일정

- 4월-4째주 <br>
  세부 역할 분담 및 와이어프레임 작성

- 5월-1째주 <br>
  frame별 구성 및 DB설계

- 5월-2째주 <br>
  흐름도 작성 및 프론트엔드단 구성

- 5월-3째주 <br>
  백엔드단 구성

- 5월-4째주 <br>
  백엔드단 구성

- 6월-1째주 <br>
  사이트 결함 확인 및 PPT자료 제작.

- 6월-2째주 <br>
  마무리 및 최종 확인

# 기타

문제점 발생시 해결 방안 <br>
Stack Overflow를 통한 에러 해결방안 검색.
