--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: admin; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE admin (
    uname text NOT NULL,
    name text,
    email text,
    phno text,
    password text
);


ALTER TABLE public.admin OWNER TO postgres;

--
-- Name: cprog; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE cprog (
    sno integer NOT NULL,
    que text,
    a text,
    b text,
    c text,
    d text,
    ans text
);


ALTER TABLE public.cprog OWNER TO postgres;

--
-- Name: cprog_sno_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE cprog_sno_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cprog_sno_seq OWNER TO postgres;

--
-- Name: cprog_sno_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE cprog_sno_seq OWNED BY cprog.sno;


--
-- Name: java; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE java (
    sno integer NOT NULL,
    que text,
    a text,
    b text,
    c text,
    d text,
    ans text
);


ALTER TABLE public.java OWNER TO postgres;

--
-- Name: java_sno_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE java_sno_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.java_sno_seq OWNER TO postgres;

--
-- Name: java_sno_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE java_sno_seq OWNED BY java.sno;


--
-- Name: php; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE php (
    sno integer NOT NULL,
    que text,
    a text,
    b text,
    c text,
    d text,
    ans text
);


ALTER TABLE public.php OWNER TO postgres;

--
-- Name: php_sno_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE php_sno_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.php_sno_seq OWNER TO postgres;

--
-- Name: php_sno_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE php_sno_seq OWNED BY php.sno;


--
-- Name: res_cprog; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE res_cprog (
    sno integer NOT NULL,
    name text,
    score text,
    date date
);


ALTER TABLE public.res_cprog OWNER TO postgres;

--
-- Name: res_cprog_sno_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE res_cprog_sno_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.res_cprog_sno_seq OWNER TO postgres;

--
-- Name: res_cprog_sno_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE res_cprog_sno_seq OWNED BY res_cprog.sno;


--
-- Name: res_java; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE res_java (
    sno integer NOT NULL,
    name text,
    score text,
    date date
);


ALTER TABLE public.res_java OWNER TO postgres;

--
-- Name: res_java_sno_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE res_java_sno_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.res_java_sno_seq OWNER TO postgres;

--
-- Name: res_java_sno_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE res_java_sno_seq OWNED BY res_java.sno;


--
-- Name: res_php; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE res_php (
    sno integer NOT NULL,
    name text,
    score text,
    date date
);


ALTER TABLE public.res_php OWNER TO postgres;

--
-- Name: res_php_sno_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE res_php_sno_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.res_php_sno_seq OWNER TO postgres;

--
-- Name: res_php_sno_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE res_php_sno_seq OWNED BY res_php.sno;


--
-- Name: student; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE student (
    uname text NOT NULL,
    name text,
    email text,
    phno text,
    password text
);


ALTER TABLE public.student OWNER TO postgres;

--
-- Name: totquiz; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE totquiz (
    sno integer NOT NULL,
    qname text,
    hits text,
    info text
);


ALTER TABLE public.totquiz OWNER TO postgres;

--
-- Name: totquiz_sno_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE totquiz_sno_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.totquiz_sno_seq OWNER TO postgres;

--
-- Name: totquiz_sno_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE totquiz_sno_seq OWNED BY totquiz.sno;


--
-- Name: sno; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cprog ALTER COLUMN sno SET DEFAULT nextval('cprog_sno_seq'::regclass);


--
-- Name: sno; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY java ALTER COLUMN sno SET DEFAULT nextval('java_sno_seq'::regclass);


--
-- Name: sno; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY php ALTER COLUMN sno SET DEFAULT nextval('php_sno_seq'::regclass);


--
-- Name: sno; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY res_cprog ALTER COLUMN sno SET DEFAULT nextval('res_cprog_sno_seq'::regclass);


--
-- Name: sno; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY res_java ALTER COLUMN sno SET DEFAULT nextval('res_java_sno_seq'::regclass);


--
-- Name: sno; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY res_php ALTER COLUMN sno SET DEFAULT nextval('res_php_sno_seq'::regclass);


--
-- Name: sno; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY totquiz ALTER COLUMN sno SET DEFAULT nextval('totquiz_sno_seq'::regclass);


--
-- Data for Name: admin; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY admin (uname, name, email, phno, password) FROM stdin;
karan	kchavan	global.karanchavan@gmail.com	8605489677	cristiano
\.


--
-- Data for Name: cprog; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY cprog (sno, que, a, b, c, d, ans) FROM stdin;
1	Who is inventor of c?	Dennis Ritchie	rudolf hangman	bjarne	strostrup	a
2	Which symbol is permitted for identifier in c?	@	$	_	#	c
\.


--
-- Name: cprog_sno_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('cprog_sno_seq', 2, true);


--
-- Data for Name: java; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY java (sno, que, a, b, c, d, ans) FROM stdin;
1	Java is a ..... language	weakly typed	strongly typed	moderate typed	None of these	b
2	How many primitive data types are there in java ?	6	7	8	9	c
3	In Java byte, short, int and long all of these are	signed	unsigned	both a & b	None of these	a
4	The smallest integer type is ?	short	byte	int	long	b
5	Which of the following automatic type conversion will be possible?	short to int	byte to int	int to long	long to int	c
6	In Java arrays are 	objects	object references	primitive data types	None of these	a
7	Which of the following is valid statement ?	char[] c=new char();	char[] c=new char[5];	char[] c=new char(4);	char[] c=new char[];	b
8	What will be the return type of a method that not returns any value?	void	int	double	None of these	a
9	What is Math.floor(3.6)?	3.0	3	4	4.0	a
10	In Java a thread can be created by ........	Extending the thread class	Implementing Runnable Interface	Both	None of these	c
\.


--
-- Name: java_sno_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('java_sno_seq', 10, true);


--
-- Data for Name: php; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY php (sno, que, a, b, c, d, ans) FROM stdin;
1	What is PHP stands for?<br>1.Personal Home Page<br>2.Hypertest Preprocessor<br>3.Pretext Hypertext preprocessor<br>4.Preprocessor Home Page	both 1 & 2	Both 2 & 4	only 2	both 1& 2	d
2	PHP files have a default file extension is ....?	.html	.xml	.php	.ph	c
\.


--
-- Name: php_sno_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('php_sno_seq', 2, true);


--
-- Data for Name: res_cprog; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY res_cprog (sno, name, score, date) FROM stdin;
1	karan	2	2020-01-24
2	karan	4	2020-01-27
3	karan	2	2020-01-29
4	karan	0	2020-01-29
5	swami	4	2020-01-29
6	swami	2	2020-01-29
7	swami	2	2020-01-29
8	karan	2	2020-02-07
9	Mohsin	2	2020-02-09
10	karan	2	2020-02-20
11	karan	20	2020-02-21
12	karan	16	2020-02-21
13	karan	18	2020-02-21
14	karan	18	2020-02-21
15	karan	18	2020-02-21
16	karan	18	2020-02-21
17	karan	18	2020-02-21
18	karan	18	2020-02-21
19	karan	18	2020-02-21
20	karan	18	2020-02-21
\.


--
-- Name: res_cprog_sno_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('res_cprog_sno_seq', 20, true);


--
-- Data for Name: res_java; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY res_java (sno, name, score, date) FROM stdin;
1	karan	4	2020-02-21
2	karan	4	2020-02-21
3	karan	20	2020-02-21
\.


--
-- Name: res_java_sno_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('res_java_sno_seq', 3, true);


--
-- Data for Name: res_php; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY res_php (sno, name, score, date) FROM stdin;
\.


--
-- Name: res_php_sno_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('res_php_sno_seq', 1, false);


--
-- Data for Name: student; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY student (uname, name, email, phno, password) FROM stdin;
saurabh	sc	sc@s.c	7589641230	asdf
swami	swamini	abc@gmail.com	9874563210	swamini
Mohsin	Mohsin	abc@gmail.com	1234567890	12345
karan	karankc	global.ck@gmail.com	8686868686	123456
\.


--
-- Data for Name: totquiz; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY totquiz (sno, qname, hits, info) FROM stdin;
1	cprog	15	C language Tutorial with programming approach for beginners and professionals,helps you to understand the C language tutorial easily.Our C tutorial explains each topic with programs.
17	Java	4	Java is general-purpose languagethat is class based, object oriented and designed to have as few implementation dependencies ass possible
19	PHP	\N	PHP is useful in Web developement. It is a server side scripting language.
\.


--
-- Name: totquiz_sno_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('totquiz_sno_seq', 19, true);


--
-- Name: admin_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY admin
    ADD CONSTRAINT admin_pkey PRIMARY KEY (uname);


--
-- Name: cprog_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY cprog
    ADD CONSTRAINT cprog_pkey PRIMARY KEY (sno);


--
-- Name: java_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY java
    ADD CONSTRAINT java_pkey PRIMARY KEY (sno);


--
-- Name: php_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY php
    ADD CONSTRAINT php_pkey PRIMARY KEY (sno);


--
-- Name: res_cprog_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY res_cprog
    ADD CONSTRAINT res_cprog_pkey PRIMARY KEY (sno);


--
-- Name: res_java_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY res_java
    ADD CONSTRAINT res_java_pkey PRIMARY KEY (sno);


--
-- Name: res_php_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY res_php
    ADD CONSTRAINT res_php_pkey PRIMARY KEY (sno);


--
-- Name: student_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY student
    ADD CONSTRAINT student_pkey PRIMARY KEY (uname);


--
-- Name: totquiz_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY totquiz
    ADD CONSTRAINT totquiz_pkey PRIMARY KEY (sno);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

