DROP DATABASE IF EXISTS dogshelter;
CREATE DATABASE IF NOT EXISTS dogshelter;
USE dogshelter;

/* Table structure */

CREATE TABLE dog_table(
id int PRIMARY KEY auto_increment,
name char(30),
Breed char(30),
AdoptionPrice DEC(5,2),
Description text,
ThumbnailImageName char (50),
LargeImageName char (50)

)ENGINE=InnoDB AUTO_INCREMENT=00632;
Insert into dog_table
		(id, name, Breed, AdoptionPrice, Description, ThumbnailImageName, LargeImageName)
	Values
(NULL,"Jack","Beagle",175.00,"Jack is a great Beagle who loves typical
Beagle things like sniffing and going for
walks. He is a happy dog that was found as
a stray. Jack is already neutered, house-trained, purebred and up to date with
shots. So, if you are looking for a nice
family dog, Jack is your boy!","dogsmall1.jpg","doglarge1.jpg"),

(NULL,"Kayla","Border Collie",155.00,"Kayla is an adorable little 3 1/2 month
old Border Collie. Kayla was part of an unwanted litter
and she is the last one that needs a home.
Kayla is very sweet and a little shy.
She is still learning how to walk on a leash.
Kayla has been vaccinated and had a deworming.","dogsmall2.jpg","doglarge2.jpg"),

(NULL,"Molly","Boston Terrier",120.00,"Molly is a 2 year old Boston Terrier
who needs a good home with good
people. Molly is a high energy dog,
which is typical with Boston Terriers.
She loves going on walks and playing
with her toys. Molly is spayed, up to
date with shots, good with kids, and
also good with other dogs.","dogsmall3.jpg","doglarge3.jpg"),

(NULL,"Rocky","American Bulldog",185.00,"Rocky is a handsome Bulldog who
was rescued in Allegheny County.
He has had a rough life up until
now so Rocky would be best fitted
for a family without kids. Rocky is
neutered, purebred, up to date
with shots, and is good with other
dogs and cats.","dogsmall4.jpg","doglarge4.jpg"),

(NULL,"Pudge","Dachshund",110.00,"Pudge is a 5 year old neutered dog.
His previous owner moved into an
apartment that did not allow dogs so
he had to put him up for adoption.
Pudge loves to play and is very social.
He is already neutered, housetrained,
up to date with shots, good with kids
and other dogs.","dogsmall5.jpg","doglarge5.jpg"),

(NULL,"Lady","German Shephard",230.00,"Lady is a 6 year old German Shepherd.
It will take a while for Lady to get to
know you because she has been
through losing her family and
being transferred between a couple
shelters. She needs a family that will
spend time getting to know her and
give her extra attention and care.
Lady is already spayed.","dogsmall6.jpg","doglarge6.jpg"),

(NULL,"Foxy","Golden Retriever",250.00,"Foxy is a 3 year old Golden Retriever.
We found her injured laying along the
road in a rain storm. She loves little
kids and adores senior citizens. Foxy
is already neutered, housetrained,
purebred and up to date with all
shots.","dogsmall7.jpg","doglarge7.jpg"),

(NULL, "Bruce","Great Dane",190.00,"Bruce is a very sweet gentleman. He loves
to play and have fun but will settle down
very quickly if you tell him so. Bruce is 4
years old and will make a great addition to
your family. Not only is he neutered but
Bruce is housetrained, up to date with shots
and is good with kids, other dogs and even
cats.","dogsmall8.jpg","doglarge8.jpg"),


(NULL,"Mia","Siberian Husky",300.00,"Mia is a lovely 1-2 year old Siberian
Husky. She is calm, sweet,
smart and well behaved. She has
had a difficult start in life, being
picked up as a stray puppy at
the age of 4 months. Mia is
already spayed and is up to date
with her shots.","dogsmall9.jpg","doglarge9.jpg"),

(NULL,"Wrinkles","Pug",50.00,"Wrinkles is an adorable pug. He is 3 years old.
He is afraid of little kids, so a place without
kids would be the ideal home for Wrinkles.
One of his best traits is that he loves to
snuggle and will give a big yelp when he
wants attention. Wrinkles is neutered,
housetrained, up to date with shots and is
good with other dogs and cats.","dogsmall10.jpg","doglarge10.jpg");



create table user_table(

id INT PRIMARY KEY AUTO_INCREMENT,
username CHAR(25),
password CHAR(25),
privilege ENUM("normal","admin","super")


);

INSERT INTO user_table
	VALUES

	(null,"master","master","admin");

SELECT * FROM user_table;
select * from dog_table;
show tables;
show databases;
show columns from dog_table;