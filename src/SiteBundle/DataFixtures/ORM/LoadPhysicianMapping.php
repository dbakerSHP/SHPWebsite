<?php
/**
 * Created by PhpStorm.
 * User: jstgermain
 * Date: 9/24/15
 * Time: 7:46 AM
 */

namespace SiteBundle\Bundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadPhysicianMapping implements FixtureInterface
{

	public function load(ObjectManager $manager)
	{


//2,Affiliated Allergy & Pulmonary Associates,George,Gwinn,Allergy,34597 N. 60th St.,,Scottsdale,AZ,85266,"33.798672, -111.951348",(480) 473-7800
//3,Affiliated Urologists,Ali,Borhan,Urology,20950 N. Tatum Blvd.,Ste. 220A,Phoenix,AZ,85050,"33.676190, -111.978363",(602) 264-0608
//3,Affiliated Urologists,Daniel,Cooper,Urology,20950 N. Tatum Blvd.,Ste. 220A,Phoenix,AZ,85050,"33.676190, -111.978363",(602) 264-0608
//3,Affiliated Urologists,Mark,Hong,Urology,20950 N. Tatum Blvd.,Ste. 220A,Phoenix,AZ,85050,"33.676190, -111.978363",(602) 264-0608
//3,Affiliated Urologists,Stephen,Ponas,Urology,20950 N. Tatum Blvd.,Ste. 220A,Phoenix,AZ,85050,"33.676190, -111.978363",(602) 264-0608
//3,Affiliated Urologists,Daniel,Cooper,Urology,2222 E. Highland Ave. ,Ste. 400,Phoenix,AZ,85016,"33.506340, -112.033876",(602) 264-0608
//3,Affiliated Urologists,Ali,Borhan,Urology,3330 N. 2nd St.,Ste. 601,Phoenix,AZ,85012,"33.486776, -112.071694",(602) 264-0608
//3,Affiliated Urologists,Daniel,Cooper,Urology,3330 N. 2nd St.,Ste. 601,Phoenix,AZ,85012,"33.486776, -112.071694",(602) 264-0608
//3,Affiliated Urologists,Mark,Hong,Urology,3330 N. 2nd St.,Ste. 601,Phoenix,AZ,85012,"33.486776, -112.071694",(602) 264-0608
//3,Affiliated Urologists,Daniel,Jaffee,Urology,3330 N. 2nd St.,Ste. 601,Phoenix,AZ,85012,"33.486776, -112.071694",(602) 264-0608
//3,Affiliated Urologists,Stephen,Ponas,Urology,3330 N. 2nd St.,Ste. 601,Phoenix,AZ,85012,"33.486776, -112.071694",(602) 264-0608
//4,Agave Pediatrics,Rajeev,Agarwal,Pediatrics,7010 E. Chauncey Ln.,Ste. 225,Phoenix,AZ,85054,"33.651859, -111.929696",(480) 585-5200
//4,Agave Pediatrics,Leslie,Mortland,Pediatrics,7010 E. Chauncey Ln.,Ste. 225,Phoenix,AZ,85054,"33.651859, -111.929696",(480) 585-5200
//4,Agave Pediatrics,Nichole,Thomas,Pediatrics,7010 E. Chauncey Ln.,Ste. 225,Phoenix,AZ,85054,"33.651859, -111.929696",(480) 585-5200
//4,Agave Pediatrics,Rajeev,Agarwal,Pediatrics,7333 E. Thomas Rd.,,Scottsdale,AZ,85251,"33.480194, -111.922778",(480) 585-5200
//4,Agave Pediatrics,Leslie,Mortland,Pediatrics,7333 E. Thomas Rd.,,Scottsdale,AZ,85251,"33.480194, -111.922778",(480) 585-5200
//4,Agave Pediatrics,Nichole,Thomas,Pediatrics,7333 E. Thomas Rd.,,Scottsdale,AZ,85251,"33.480194, -111.922778",(480) 585-5200
//5,Arizona Kidney Disease and Hypertension Center,Esmat,Mustafa,Nephrology,3815 E. Bell Rd.,Ste. 3500,Phoenix,AZ,85032,"33.640261, -111.999902",(602) 559-5770
//5,Arizona Kidney Disease and Hypertension Center,Hui,Zhao,Nephrology,3815 E. Bell Rd.,Ste. 3500,Phoenix,AZ,85032,"33.640261, -111.999902",(602) 559-5770
//5,Arizona Kidney Disease and Hypertension Center,David,Burstein,Nephrology,7331 E. Osborn Rd.,Ste. 150,Scottsdale,AZ,85251,"33.487638, -111.924263",(480) 994-1238
//5,Arizona Kidney Disease and Hypertension Center,Alejandro,Morales,Nephrology,7331 E. Osborn Rd.,Ste. 150,Scottsdale,AZ,85251,"33.487638, -111.924263",(480) 994-1238
//5,Arizona Kidney Disease and Hypertension Center,Yogesh,Amin,Nephrology,8415 N. Pima Rd.,Ste. 150,Scottsdale,AZ,85258,"33.557086, -111.890739",(480) 551-1057
//5,Arizona Kidney Disease and Hypertension Center,Javier,Bibb,Nephrology,8415 N. Pima Rd.,Ste. 150,Scottsdale,AZ,85258,"33.557086, -111.890739",(480) 551-1057
//5,Arizona Kidney Disease and Hypertension Center,Esmat,Mustafa,Nephrology,8415 N. Pima Rd.,Ste. 150,Scottsdale,AZ,85258,"33.557086, -111.890739",(480) 551-1057
//5,Arizona Kidney Disease and Hypertension Center,Romanita,Nica,Nephrology,8415 N. Pima Rd.,Ste. 150,Scottsdale,AZ,85258,"33.557086, -111.890739",(480) 551-1057
//5,Arizona Kidney Disease and Hypertension Center,Savas,Petrides,Nephrology,8415 N. Pima Rd.,Ste. 150,Scottsdale,AZ,85258,"33.557086, -111.890739",(480) 551-1057
//5,Arizona Kidney Disease and Hypertension Center,Jatinder,Soni,Nephrology,8415 N. Pima Rd.,Ste. 150,Scottsdale,AZ,85258,"33.557086, -111.890739",(480) 551-1057
//5,Arizona Kidney Disease and Hypertension Center,Ann,Thomas,Nephrology,8415 N. Pima Rd.,Ste. 150,Scottsdale,AZ,85258,"33.557086, -111.890739",(480) 551-1057
//6,Arizona Arrhythmia Consultants,Renzo,Cataldo,Cardiac Electrophysiology,10117 N. 92nd St.,,Scottsdale,AZ,85258,"33.578213, -111.880156",(480) 246-3000
//6,Arizona Arrhythmia Consultants,Thomas,Mattioni,Cardiac Electrophysiology,10117 N. 92nd St.,,Scottsdale,AZ,85258,"33.578213, -111.880156",(480) 246-3000
//6,Arizona Arrhythmia Consultants,David,Riggio,Cardiac Electrophysiology,10117 N. 92nd St.,,Scottsdale,AZ,85258,"33.578213, -111.880156",(480) 246-3000
//6,Arizona Arrhythmia Consultants,Michael,Zawaneh,Cardiac Electrophysiology,10117 N. 92nd St.,,Scottsdale,AZ,85258,"33.578213, -111.880156",(480) 246-3000
//6,Arizona Arrhythmia Consultants,David,Riggio,Cardiac Electrophysiology,3225 N. Civic Center Plaza,Ste. 1,Scottsdale,AZ,85251,"33.485175, -111.921413",(480) 246-3000
//6,Arizona Arrhythmia Consultants,Michael,Zawaneh,Cardiac Electrophysiology,3225 N. Civic Center Plaza,Ste. 1,Scottsdale,AZ,85251,"33.485175, -111.921413",(480) 246-3000
//7,Arizona Bone and Joint Specialists,Philip,To,Orthopedic Surgeon,13640 N. 7th St.,,Phoenix,AZ,85022,"33.610995, -112.066007",(602) 863-2040
//7,Arizona Bone and Joint Specialists,Brad,Bruns,Orthopedic Surgeon,5620 E. Bell Rd.,,Scottsdale,AZ,85254,"33.640810, -111.959278",(602) 493-9361
//7,Arizona Bone and Joint Specialists,David,Camarata,Orthopedic Surgeon,5620 E. Bell Rd.,,Scottsdale,AZ,85254,"33.640810, -111.959278",(602) 493-9361
//7,Arizona Bone and Joint Specialists,Richard,Martin,Orthopedic Surgeon,5620 E. Bell Rd.,,Scottsdale,AZ,85254,"33.640810, -111.959278",(602) 493-9361
//7,Arizona Bone and Joint Specialists,Brian,Shafer,Orthopedic Surgeon,5620 E. Bell Rd.,,Scottsdale,AZ,85254,"33.640810, -111.959278",(602) 493-9361
//7,Arizona Bone and Joint Specialists,Philip,To,Orthopedic Surgeon,5620 E. Bell Rd.,,Scottsdale,AZ,85254,"33.640810, -111.959278",(602) 493-9361
//8,Arizona Cardiology Group,Youngsoo,Cho,Cardiology,1988 E. Baseline Rd. ,Ste. 101,Tempe,AZ,85283,"33.379093, -111.901041",(602) 386-1100
//8,Arizona Cardiology Group,Wazhma,Aslamy,Cardiology,20201 N. Scottsdale Healthcare Dr.,Ste. 200,Scottsdale,AZ,85255,"33.671015, -111.920379",(602) 386-1100
//8,Arizona Cardiology Group,Christina,Reuss,Cardiology,20201 N. Scottsdale Healthcare Dr.,Ste. 200,Scottsdale,AZ,85255,"33.671015, -111.920379",(602) 386-1100
//8,Arizona Cardiology Group,Gregory,Sanders,Cardiology,20201 N. Scottsdale Healthcare Dr.,Ste. 200,Scottsdale,AZ,85255,"33.671015, -111.920379",(602) 386-1100
//8,Arizona Cardiology Group,Daniel,Storch,Cardiology,20201 N. Scottsdale Healthcare Dr.,Ste. 200,Scottsdale,AZ,85255,"33.671015, -111.920379",(602) 386-1100
//8,Arizona Cardiology Group,Youngsoo,Cho,Cardiology,340 E. Palm Ln.,Ste. 175,Phoenix,AZ,85004,"33.469941, -112.068354",(602) 368-1112
//8,Arizona Cardiology Group,Mitchell,Ross,Cardiology,340 E. Palm Ln.,Ste. 175,Phoenix,AZ,85004,"33.469941, -112.068354",(602) 368-1112
//9,Arizona Center for Cancer Care,Ivor,Benjamin,Gynecologic Oncology,10460 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.581146, -111.883676",(480) 278-8300
//9,Arizona Center for Cancer Care,Luci,Chen,Radiation-Oncology,10460 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.581146, -111.883676",(480) 278-8300
//9,Arizona Center for Cancer Care,Robert,Kuske,Radiation-Oncology,10460 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.581146, -111.883676",(480) 278-8300
//9,Arizona Center for Cancer Care,James,Marsh,Radiation-Oncology,10460 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.581146, -111.883676",(480) 278-8300
//9,Arizona Center for Cancer Care,Annushka,Patel,Radiation-Oncology,10460 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.581146, -111.883676",(480) 278-8300
//9,Arizona Center for Cancer Care,Dennis,Scribner,Gynecologic Oncology,10460 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.581146, -111.883676",(480) 278-8300
//9,Arizona Center for Cancer Care,Scott,Tannehill,Radiation-Oncology,10460 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.581146, -111.883676",(480) 278-8300
//9,Arizona Center for Cancer Care,Farley,Yang,Radiation-Oncology,10460 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.581146, -111.883676",(480) 278-8300
//9,Arizona Center for Cancer Care,Ivor,Benjamin,Gynecologic Oncology,14155 N. 83rd Ave.,Ste. 127,Peoria,AZ,85381,"33.612806, -112.236787",(623) 773-2873
//9,Arizona Center for Cancer Care,Christopher,Biggs,Radiation-Oncology,14155 N. 83rd Ave.,Ste. 127,Peoria,AZ,85381,"33.612806, -112.236787",(623) 773-2873
//9,Arizona Center for Cancer Care,Terry,Lee,Radiation-Oncology,14155 N. 83rd Ave.,Ste. 127,Peoria,AZ,85381,"33.612806, -112.236787",(623) 773-2873
//9,Arizona Center for Cancer Care,Marianne,Mildenberger,Radiation-Oncology,14155 N. 83rd Ave.,Ste. 127,Peoria,AZ,85381,"33.612806, -112.236787",(623) 773-2873
//9,Arizona Center for Cancer Care,Daniel,Reed,Hematology-Oncology,14155 N. 83rd Ave.,Ste. 127,Peoria,AZ,85381,"33.612806, -112.236787",(623) 773-2873
//9,Arizona Center for Cancer Care,Dennis,Scribner,Gynecologic Oncology,14155 N. 83rd Ave.,Ste. 127,Peoria,AZ,85381,"33.612806, -112.236787",(623) 773-2873
//9,Arizona Center for Cancer Care,Christopher,Biggs,Radiation-Oncology,14674 W. Mountain View Blvd.,Ste. 127,Surprise,AZ,85374,"33.655420, -112.376683",(623) 466-7469
//9,Arizona Center for Cancer Care,Marianne,Mildenberger,Radiation-Oncology,14674 W. Mountain View Blvd.,Ste. 127,Surprise,AZ,85374,"33.655420, -112.376683",(623) 466-7469
//9,Arizona Center for Cancer Care,Daniel,Reed,Hematology-Oncology,14674 W. Mountain View Blvd.,Ste. 127,Surprise,AZ,85374,"33.655420, -112.376683",(623) 466-7469
//9,Arizona Center for Cancer Care,Annushka,Patel,Radiation-Oncology,20950 N. 29th Ave.,,Phoenix,AZ,85027,"33.676018, -112.120792",(480) 278-8300
//9,Arizona Center for Cancer Care,Coral,Quiet,Radiation-Oncology,20950 N. 29th Ave.,,Phoenix,AZ,85027,"33.676018, -112.120792",(480) 278-8300
//9,Arizona Center for Cancer Care,Gregory,Maggass,Radiation-Oncology,3645 S. Rome St.,Ste. 116,Gilbert,AZ,85297,"33.284785, -111.750309",(480) 278-8300
//9,Arizona Center for Cancer Care,Scott,Tannehill,Radiation-Oncology,3645 S. Rome St.,Ste. 116,Gilbert,AZ,85297,"33.284785, -111.750309",(480) 278-8300
//9,Arizona Center for Cancer Care,Patrick,Donovan,Hematology-Oncology,7337 E. 2nd St.,,Scottsdale,AZ,85285,"33.491197, -111.923691",(480) 949-7808
//9,Arizona Center for Cancer Care,James,Marsh,Radiation-Oncology,7337 E. 2nd St.,,Scottsdale,AZ,85285,"33.491197, -111.923691",(480) 949-7808
//9,Arizona Center for Cancer Care,Annushka,Patel,Radiation-Oncology,7337 E. 2nd St.,,Scottsdale,AZ,85285,"33.491197, -111.923691",(480) 949-7808
//9,Arizona Center for Cancer Care,Paul,Wassermann,Hematology-Oncology,7337 E. 2nd St.,,Scottsdale,AZ,85285,"33.491197, -111.923691",(480) 949-7808
//10,Arizona Digestive Health,Linda,Shields,Gastroenterology,10290 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.580242, -111.883792",(480) 767-3100
//10,Arizona Digestive Health,Bradford,Gelzayd,Gastroenterology,8415 N. Pima Rd.,Ste. 275,Scottsdale,AZ,85258,"33.557086, -111.890739",(480) 767-7273
//10,Arizona Digestive Health,John,Yalam,Gastroenterology,9755 N. 90th St.,Ste. A205,Scottsdale,AZ,85258,"33.574598, -111.885691",(480) 767-3100
//10,Arizona Digestive Health,Daniel,Meline,Gastroenterology,9767 N. 91st St.,Ste. 100,Scottsdale,AZ,85258,"33.573943, -111.882395",(480) 860-1990
//11,Arizona Eye Specialists,Joseph,Aiello,Ophthalmology,300 E. Osborn Rd.,Ste. 100,Phoenix,AZ,85012,"33.487992, -112.068805",(602) 254-7255
//11,Arizona Eye Specialists,James,Goldman,Ophthalmology,300 E. Osborn Rd.,Ste. 100,Phoenix,AZ,85012,"33.487992, -112.068805",(602) 254-7255
//11,Arizona Eye Specialists,Thomas,McPhee,Ophthalmology,300 E. Osborn Rd.,Ste. 100,Phoenix,AZ,85012,"33.487992, -112.068805",(602) 254-7255
//11,Arizona Eye Specialists,Craig,Suiter,Ophthalmology,300 E. Osborn Rd.,Ste. 100,Phoenix,AZ,85012,"33.487992, -112.068805",(602) 254-7255
//11,Arizona Eye Specialists,James,Goldman,Ophthalmology,4915 E. Baseline Rd.,Ste. 114,Gilbert,AZ,85234,"33.378495, -111.72564",(489) 830-0120
//11,Arizona Eye Specialists,Thomas,McPhee,Ophthalmology,5620 W. Thunderbird Rd.,Ste. H-3,Glendale,AZ,85306,"33.611671, -112.179868",(602) 547-2002
//11,Arizona Eye Specialists,Joseph,Aiello,Ophthalmology,7245 E. Osborn Rd.,Ste. 4,Scottsdale,AZ,85251,"33.487359, -111.925068",(480) 994-5012
//11,Arizona Eye Specialists,James,Goldman,Ophthalmology,7245 E. Osborn Rd.,Ste. 4,Scottsdale,AZ,85251,"33.487359, -111.925068",(480) 994-5012
//11,Arizona Eye Specialists,Thomas,McPhee,Ophthalmology,7245 E. Osborn Rd.,Ste. 4,Scottsdale,AZ,85251,"33.487359, -111.925068",(480) 994-5012
//11,Arizona Eye Specialists,Craig,Suiter,Ophthalmology,7245 E. Osborn Rd.,Ste. 4,Scottsdale,AZ,85251,"33.487359, -111.925068",(480) 994-5012
//12,Arizona Hand and Wrist Specialists,Mark,Leber,Hand Surgery,2940 E. Banner Gateway Dr.,Ste. 350,Gilbert,AZ,85234,"33.384163, -111.725737",(602) 393-1010
//12,Arizona Hand and Wrist Specialists,Scott,Frankel,Hand Surgery,690 N. Cofco Center Ct.,Ste. 190,Phoenix,AZ,85008,"33.455508, -111.990314",(603) 393-1010
//12,Arizona Hand and Wrist Specialists,Mark,Leber,Hand Surgery,690 N. Cofco Center Ct.,Ste. 190,Phoenix,AZ,85008,"33.455508, -111.990314",(603) 393-1010
//12,Arizona Hand and Wrist Specialists,Scott,Frankel,Hand Surgery,8630 E. Via De Ventura,Ste. 205,Scottsdale,AZ,85258,"33.554202, -111.895889",(602) 393-1010
//13,Arizona Neurology and Sleep Center,Jose,De Ocampo,Neurology,10290 N. 92nd St.,Ste. 300,Scottsdale,AZ,85258,"33.580242, -111.883792",(480) 718-9241
//14,Arizona Oncology Associates,Tania,Cortas,Hematology-Oncology,10197 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.578198, -111.878638",(480) 993-2950
//14,Arizona Oncology Associates,Mike,Janicek,Gynecologic Oncology,10197 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.578198, -111.878638",(480) 993-2950
//14,Arizona Oncology Associates,Lanny,Hecker,Hematology-Oncology,10460 N. 92nd St.,Ste. 400,Scottsdale,AZ,85258,"33.581146, -111.883676",(480) 860-2540
//14,Arizona Oncology Associates,Michael,Roberts,Hematology-Oncology,10460 N. 92nd St.,Ste. 400,Scottsdale,AZ,85258,"33.581146, -111.883676",(480) 860-2540
//14,Arizona Oncology Associates,Mahesh,Seetharam,Hematology-Oncology,10460 N. 92nd St.,Ste. 400,Scottsdale,AZ,85258,"33.581146, -111.883676",(480) 860-2540
//14,Arizona Oncology Associates,John,Bibb,Hematology-Oncology,2222 E. Highland Ave,Ste. 400,Phoenix,AZ,85016,"33.506340, -112.033876",(602) 277-4868
//15,Arizona Pulmonary Specialists,Lorie,Loreman,Pulmonology,9700 N. 91st St.,Ste. A200,Scottsdale,AZ,85258,"33.573686, -111.883471",(480) 614-2000
//15,Arizona Pulmonary Specialists,Ewa,Lupa-Laskus,Pulmonology,9700 N. 91st St.,Ste. A200,Scottsdale,AZ,85258,"33.573686, -111.883471",(480) 614-2000
//15,Arizona Pulmonary Specialists,Bridgett,Ronan,Pulmonology,9700 N. 91st St.,Ste. A200,Scottsdale,AZ,85258,"33.573686, -111.883471",(480) 614-2000
//15,Arizona Pulmonary Specialists,Jonathan,Ruzi,Pulmonology,9700 N. 91st St.,Ste. A200,Scottsdale,AZ,85258,"33.573686, -111.883471",(480) 614-2000
//15,Arizona Pulmonary Specialists,Sabitha,Setty,Pulmonology,9700 N. 91st St.,Ste. A200,Scottsdale,AZ,85258,"33.573686, -111.883471",(480) 614-2000
//15,Arizona Pulmonary Specialists,Lawrence,Slama,Pulmonology,9700 N. 91st St.,Ste. A200,Scottsdale,AZ,85258,"33.573686, -111.883471",(480) 614-2000
//15,Arizona Pulmonary Specialists,Paul,Steinmetz,Pulmonary-Critical Care,9700 N. 91st St.,Ste. A200,Scottsdale,AZ,85258,"33.573686, -111.883471",(480) 614-2000
//15,Arizona Pulmonary Specialists,Judson,Tillinghast,Pulmonary-Critical Care,9700 N. 91st St.,Ste. A200,Scottsdale,AZ,85258,"33.573686, -111.883471",(480) 614-2000
//16,Arizona State Urology,Daniel,Gilbert,Urology,20201 N. Scottsdale Healthcare Dr.,Ste. 240,Scottsdale,AZ,85255,"33.671015, -111.920379",(602) 357-2400
//16,Arizona State Urology,Roscoe,Nelson,Urology,20201 N. Scottsdale Healthcare Dr.,Ste. 240,Scottsdale,AZ,85255,"33.671015, -111.920379",(602) 357-2400
//16,Arizona State Urology,Howard,Tay,Urology,20201 N. Scottsdale Healthcare Dr.,Ste. 240,Scottsdale,AZ,85255,"33.671015, -111.920379",(602) 357-2400
//17,Gynemedic,Elizabeth,Mahour-Moyer,OB/GYN,16421 N. Tatum Blvd.,Ste. 201,Phoenix,AZ,85032,"33.635981, -111.97742",(602) 904-1111
//17,Gynemedic,Armity,Simon,OB/GYN,16421 N. Tatum Blvd.,Ste. 201,Phoenix,AZ,85032,"33.635981, -111.97742",(602) 904-1111
//17,Gynemedic,Elizabeth,Mahour-Moyer,OB/GYN,9070 E. Desert Cove Ave.,Ste. 102,Scottsdale,AZ,85260,"33.585610, -111.884972",(480) 860-2322
//17,Gynemedic,Armity,Simon,OB/GYN,9070 E. Desert Cove Ave.,Ste. 102,Scottsdale,AZ,85260,"33.585610, -111.884972",(480) 860-2322
//18,Arrow Surgical Associates,Vikram,Deka,General Surgery,10599 N. Tatum Blvd.,Ste. F-151,Paradise Valley,AZ,85253,"33.581747, -111.977533",(602) 977-0758
//18,Arrow Surgical Associates,Andrew,Smith,General Surgery,10599 N. Tatum Blvd.,Ste. F-151,Paradise Valley,AZ,85253,"33.581747, -111.977533",(602) 977-0758
//19,Associated Retina Consultants,Benjamin,Bakall,Ophthalmology,15353 N. 91st Ave.,,Peoria,AZ,85381,"33.623639, -112.25404",(602) 242-4928
//19,Associated Retina Consultants,Mary,Champion,Ophthalmology,15353 N. 91st Ave.,,Peoria,AZ,85381,"33.623639, -112.25404",(602) 242-4928
//19,Associated Retina Consultants,Jaime,Gaitan,Ophthalmology,15353 N. 91st Ave.,,Peoria,AZ,85381,"33.623639, -112.25404",(602) 242-4928
//19,Associated Retina Consultants,James,Singer,Ophthalmology,15353 N. 91st Ave.,,Peoria,AZ,85381,"33.623639, -112.25404",(602) 242-4928
//19,Associated Retina Consultants,Matthew,Welch,Ophthalmology,15353 N. 91st Ave.,,Peoria,AZ,85381,"33.623639, -112.25404",(602) 242-4928
//19,Associated Retina Consultants,Benjamin,Bakall,Ophthalmology,1750 E. Glendale Ave.,,Phoenix,AZ,85020,"33.538880, -112.044237",(602) 242-4928
//19,Associated Retina Consultants,Shepard,Bryan,Ophthalmology,1750 E. Glendale Ave.,,Phoenix,AZ,85020,"33.538880, -112.044237",(602) 242-4928
//19,Associated Retina Consultants,Mary,Champion,Ophthalmology,1750 E. Glendale Ave.,,Phoenix,AZ,85020,"33.538880, -112.044237",(602) 242-4928
//19,Associated Retina Consultants,Stephen,De Souza,Ophthalmology,1750 E. Glendale Ave.,,Phoenix,AZ,85020,"33.538880, -112.044237",(602) 242-4928
//19,Associated Retina Consultants,Jaime,Gaitan,Ophthalmology,1750 E. Glendale Ave.,,Phoenix,AZ,85020,"33.538880, -112.044237",(602) 242-4928
//19,Associated Retina Consultants,Alan,Gordon,Ophthalmology,1750 E. Glendale Ave.,,Phoenix,AZ,85020,"33.538880, -112.044237",(602) 242-4928
//19,Associated Retina Consultants,Henry,Kwong Jr.,Ophthalmology,1750 E. Glendale Ave.,,Phoenix,AZ,85020,"33.538880, -112.044237",(602) 242-4928
//19,Associated Retina Consultants,Rahul,Reddy,Ophthalmology,1750 E. Glendale Ave.,,Phoenix,AZ,85020,"33.538880, -112.044237",(602) 242-4928
//19,Associated Retina Consultants,James,Singer,Ophthalmology,1750 E. Glendale Ave.,,Phoenix,AZ,85020,"33.538880, -112.044237",(602) 242-4928
//19,Associated Retina Consultants,Matthew,Welch,Ophthalmology,1750 E. Glendale Ave.,,Phoenix,AZ,85020,"33.538880, -112.044237",(602) 242-4928
//20,BCG Oncology,Donald,Lamm,Urology,3815 E. Bell Rd.,Ste. 1210,Phoenix,AZ,85032,"33.640261, -111.999902",(602) 493-6626
//22,Bruce Freedman M.D.,Bruce,Freedman,General Surgery,10250 N. 92nd St.,Ste. 307,Scottsdale,AZ,85258,"33.580472, -111.882766",(480) 941-0866
//23,Cardiologists of Scottsdale,Lawrence,Cook,Cardiology,7970 E. Thompson Peak Pkwy.,Ste. 101,Scottsdale,AZ,85255,"33.671488, -111.909945",(480) 419-9033
//24,Cardiovascular Consultants,Pradeep,Bhat,Cardiology,10210 N. 92nd St.,Ste. 301,Scottsdale,AZ,85258,"33.579266, -111.882546",(480) 391-0555
//24,Cardiovascular Consultants,Rahool,Karnik,Cardiology,10210 N. 92nd St.,Ste. 301,Scottsdale,AZ,85258,"33.579266, -111.882546",(480) 391-0555
//24,Cardiovascular Consultants,George,Paik,Cardiology,10210 N. 92nd St.,Ste. 301,Scottsdale,AZ,85258,"33.579266, -111.882546",(480) 391-0555
//24,Cardiovascular Consultants,Pradeep,Bhat,Cardiology,2905 W. Warner Rd.,Ste. 12,Chandler,AZ,85224,"33.333922, -111.891294",(602) 867-8644
//24,Cardiovascular Consultants,Stephen,Smith,Vascular Surgery,2905 W. Warner Rd.,Ste. 12,Chandler,AZ,85224,"33.333922, -111.891294",(602) 867-8644
//24,Cardiovascular Consultants,Andy,Tran,Cardiac Electrophysiology,2905 W. Warner Rd.,Ste. 12,Chandler,AZ,85224,"33.333922, -111.891294",(602) 867-8644
//24,Cardiovascular Consultants,Aye,Win,Cardiology,2905 W. Warner Rd.,Ste. 12,Chandler,AZ,85224,"33.333922, -111.891294",(602) 867-8644
//24,Cardiovascular Consultants,Pradeep,Bhat,Cardiology,3501 N. Scottsdale Rd.,Ste. 348,Scottsdale,AZ,85251,"33.488980, -111.925842",(480) 947-3575
//24,Cardiovascular Consultants,Rahool,Karnik,Cardiology,3501 N. Scottsdale Rd.,Ste. 348,Scottsdale,AZ,85251,"33.488980, -111.925842",(480) 947-3575
//24,Cardiovascular Consultants,Mayurkumar,Bhakta,Cardiology,3805 E. Bell Rd.,Ste. 3100,Phoenix,AZ,85032,"33.640261, -111.999902",(602) 867-8644
//24,Cardiovascular Consultants,Rahool,Karnik,Cardiology,3805 E. Bell Rd.,Ste. 3100,Phoenix,AZ,85032,"33.640261, -111.999902",(602) 867-8644
//24,Cardiovascular Consultants,David,Lin,"Cardiology, Cardiology",3805 E. Bell Rd.,Ste. 3100,Phoenix,AZ,85032,"33.640261, -111.999902",(602) 867-8644
//24,Cardiovascular Consultants,Kent,Chen,Cardiology,6036 N. 19th Ave.,Ste. 312,Phoenix,AZ,85015,"33.525766, -112.100585",(602) 246-5570
//24,Cardiovascular Consultants,Andrei,Damian,Cardiology,6036 N. 19th Ave.,Ste. 312,Phoenix,AZ,85015,"33.525766, -112.100585",(602) 246-5570
//24,Cardiovascular Consultants,Curtis,Erickson,Vascular Surgery,6036 N. 19th Ave.,Ste. 312,Phoenix,AZ,85015,"33.525766, -112.100585",(602) 246-5570
//24,Cardiovascular Consultants,Renee,Espinosa,Cardiology,6036 N. 19th Ave.,Ste. 312,Phoenix,AZ,85015,"33.525766, -112.100585",(602) 246-5570
//24,Cardiovascular Consultants,Camille,Le,Cardiology,6036 N. 19th Ave.,Ste. 312,Phoenix,AZ,85015,"33.525766, -112.100585",(602) 246-5570
//24,Cardiovascular Consultants,Nirav,Mehta,Cardiology,6036 N. 19th Ave.,Ste. 312,Phoenix,AZ,85015,"33.525766, -112.100585",(602) 246-5570
//24,Cardiovascular Consultants,Allan,Reinfeld,Cardiology,6036 N. 19th Ave.,Ste. 312,Phoenix,AZ,85015,"33.525766, -112.100585",(602) 246-5570
//24,Cardiovascular Consultants,Aye,Win,Cardiology,6036 N. 19th Ave.,Ste. 312,Phoenix,AZ,85015,"33.525766, -112.100585",(602) 246-5570
//24,Cardiovascular Consultants,David,Lin,Cardiology,606 N. Country Club Dr.,Ste. 4,Mesa,AZ,85201,"33.426484, -111.840337",(602) 867-8644
//24,Cardiovascular Consultants,Aye,Win,Cardiology,606 N. Country Club Dr.,Ste. 4,Mesa,AZ,85201,"33.426484, -111.840337",(602) 867-8644
//25,HonorHealth Center for Endocrine and Pancreas Surgery,Jeffrey,Van Lier Ribbink,General Surgery,10460 N. 92nd St.,Ste. 401,Scottsdale,AZ,85258,"33.581146, -111.883676",(480) 882-7400
//27,Clear Dermatology and Aesthetics Center,Brenda,LaTowsky,Dermatology,20201 N. Scottsdale Healthcare Dr.,Ste. 260,Scottsdale,AZ,85255,"33.671015, -111.920379",(480) 398-1550
//28,Arizona Gastrointestinal Associates,Jaffrey,Kazi,Gastroenterology,8761 E. Bell Rd.,Ste. 105,Scottsdale,AZ,85260,"33.639185, -111.893184",(480) 219-6662
//28,Arizona Gastrointestinal Associates,Nizar,Ramzan,Gastroenterology,8761 E. Bell Rd.,Ste. 105,Scottsdale,AZ,85260,"33.639185, -111.893184",(480) 219-6662
//29,Colon and Rectal Clinic of Scottsdale,Susan,Garand,Colorectal Surgery,8415 N. Pima Rd.,Ste. 288,Scottsdale,AZ,85258,"33.557086, -111.890739",(480) 947-3533
//29,Colon and Rectal Clinic of Scottsdale,Andrew,Kassir,Colorectal Surgery,8415 N. Pima Rd.,Ste. 288,Scottsdale,AZ,85258,"33.557086, -111.890739",(480) 947-3533
//30,Arizona Center for Hematology and Oncology,Kimberli,Cox,Breast Surgery,19646 N. 27th Ave.,Ste. 403,Phoenix,AZ,85027,"33.664785, -112.1179",(602) 374-3440
//30,Arizona Center for Hematology and Oncology,Brenda,Moorthy,Breast Surgery,19646 N. 27th Ave.,Ste. 403,Phoenix,AZ,85027,"33.664785, -112.1179",(602) 374-3440
//30,Arizona Center for Hematology and Oncology,Kimberli,Cox,Breast Surgery,9179 W. Thunderbird Rd.,Ste. 103,Peoria,AZ,85381,"33.608436, -112.257088",(602) 374-3440
//30,Arizona Center for Hematology and Oncology,Brenda,Moorthy,Breast Surgery,9179 W. Thunderbird Rd.,Ste. 103,Peoria,AZ,85381,"33.608436, -112.257088",(602) 374-3440
//30,Arizona Center for Hematology and Oncology,Sommer,Gunia,Breast Surgery,9965 N. 95th St.,Ste. 105,Scottsdale,AZ,85258,"33.577451, -111.875753",(480) 629-8390
//30,Arizona Center for Hematology and Oncology,Linda,Liu,Breast Surgery,9965 N. 95th St.,Ste. 105,Scottsdale,AZ,85258,"33.577451, -111.875753",(480) 629-8390
//30,Arizona Center for Hematology and Oncology,Lise,Walker,Breast Surgery,9965 N. 95th St.,Ste. 105,Scottsdale,AZ,85258,"33.577451, -111.875753",(480) 629-8390
//30,Arizona Center for Hematology and Oncology,Victor,Zannis,Breast Surgery,9965 N. 95th St.,Ste. 105,Scottsdale,AZ,85258,"33.577451, -111.875753",(480) 629-8390
//31,Desert Jewel Obstetrics & Gynecology,Kimberly,Hartzfeld,OB/GYN,3501 N. Scottsdale Rd.,Ste. 230,Scottsdale,AZ,85251,"33.488980, -111.925842",(480) 970-1937
//31,Desert Jewel Obstetrics & Gynecology,Courtney,Hunt,OB/GYN,3501 N. Scottsdale Rd.,Ste. 230,Scottsdale,AZ,85251,"33.488980, -111.925842",(480) 970-1937
//32,Integrative Cardiology & Preventative Medicine Center,Dean,Silver,Cardiology,10900 N. Scottsdale Rd.,Ste. 504,Scottsdale,AZ,85254,"33.586582, -111.926704",(480) 860-2030
//33,Deer Valley OB/GYN,Victor,Kissil,OB/GYN,2033 N. 19th Ave.,Bldg. 4 Ste. 100,Phoenix,AZ,85027,"33.683401, -112.099762",(623) 879-8161
//35,Derosa Medical,Angela,DeRosa,Internal Medicine,9377 E. Bell Rd.,Ste. 143,Scottsdale,AZ,85260,"33.637352, -111.882237",(480) 619-4097
//36,Desert Center for Allergy and Chest Diseases,Gregory,Cowan,Allergy,3815 E. Bell Rd.,Ste. 4400,Phoenix,AZ,85032,"33.640261, -111.999902",(602) 788-7211
//36,Desert Center for Allergy and Chest Diseases,Gregory,Cowan,Allergy,8575 E. Princess Dr.,Ste. 201,Scottsdale,AZ,85255,"33.645452, -111.894324",(602) 222-2736
//36,Desert Center for Allergy and Chest Diseases,Stephen,Finberg,"Allergy, Pulmonology",8575 E. Princess Dr.,Ste. 201,Scottsdale,AZ,85255,"33.645452, -111.894324",(602) 222-2736
//37,Desert Ridge Family Physicians,Emily,Edwards,Family Medicine,20940 N. Tatum Blvd.,Ste. 300,Phoenix,AZ,85050,"33.675675, -111.979357",(480) 607-0060
//37,Desert Ridge Family Physicians,Kristin,Lau,Family Medicine,20940 N. Tatum Blvd.,Ste. 300,Phoenix,AZ,85050,"33.675675, -111.979357",(480) 607-0060
//37,Desert Ridge Family Physicians,Chrystal,LeMaster,Family Medicine,20940 N. Tatum Blvd.,Ste. 300,Phoenix,AZ,85050,"33.675675, -111.979357",(480) 607-0060
//37,Desert Ridge Family Physicians,Mark,Luba,Family Medicine,20940 N. Tatum Blvd.,Ste. 300,Phoenix,AZ,85050,"33.675675, -111.979357",(480) 607-0060
//37,Desert Ridge Family Physicians,Kelly,Luba,Family Medicine,20940 N. Tatum Blvd.,Ste. 300,Phoenix,AZ,85050,"33.675675, -111.979357",(480) 607-0060
//37,Desert Ridge Family Physicians,Tiffany,Nelson,Family Medicine,20940 N. Tatum Blvd.,Ste. 300,Phoenix,AZ,85050,"33.675675, -111.979357",(480) 607-0060
//37,Desert Ridge Family Physicians,Lisa,Piccione,Family Medicine,20940 N. Tatum Blvd.,Ste. 300,Phoenix,AZ,85050,"33.675675, -111.979357",(480) 607-0060
//37,Desert Ridge Family Physicians,Patricia,Rodriguez,Family Medicine,20940 N. Tatum Blvd.,Ste. 300,Phoenix,AZ,85050,"33.675675, -111.979357",(480) 607-0060
//37,Desert Ridge Family Physicians,Natalie,Suedekum,Family Medicine,20940 N. Tatum Blvd.,Ste. 300,Phoenix,AZ,85050,"33.675675, -111.979357",(480) 607-0060
//37,Desert Ridge Family Physicians,Alethea,Turner,Family Medicine,20940 N. Tatum Blvd.,Ste. 300,Phoenix,AZ,85050,"33.675675, -111.979357",(480) 607-0060
//38,Desert Vista Medical Associates,Amarjyot,Gill,Hospitalist,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 607-3800
//38,Desert Vista Medical Associates,Antonin,Jaros,Hospitalist,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 607-3800
//38,Desert Vista Medical Associates,Amy,Lee,Hospitalist,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 607-3800
//38,Desert Vista Medical Associates,Steven,Parker,Hospitalist,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 607-3800
//38,Desert Vista Medical Associates,Justin,Possner,Hospitalist,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 607-3800
//38,Desert Vista Medical Associates,Doug,Shuman,Hospitalist,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 607-3800
//38,Desert Vista Medical Associates,Amy,Lee,Hospitalist,7400 E. Thompson Peak Pkwy.,,Scottsdale,AZ,85255,"33.670695, -111.922033",(480) 324-7000
//39,DiabeVita Medical Center,Helen,Hilts,Family Medicine,7400 E. McDonald Dr.,Ste. 105,Scottsdale,AZ,85250,"33.524324, -111.921037",(480) 315-9757
//40,Donald A. Opila M.D.,Donald,Opila,Internal Medicine,7331 E. Osborn Rd.,Ste. 400,Scottsdale,AZ,85251,"33.487638, -111.924263",(480) 994-1166
//41,East Scottsdale Medical Care,Tracey,Drummond,Pediatrics,10565 N. 114th St.,Ste. 103,Scottsdale,AZ,85259,"33.581951, -111.832963",(480) 621-3505
//42,East Valley Endocrinology Diabetes and Metabolism,Atul,Lalani,Endocrinology,9500 E. Ironwood Square Dr.,Ste. 201,Scottsdale,AZ,85258,"33.578467, -111.876259",(480) 664-8988
//43,"Entegrity Ear, Nose and Throat Specialists",Samuel,Bailey,"Ear, Nose & Throat",6950 E. Chauncey Ln.,Ste. 100,Phoenix,AZ,85054,"33.652101, -111.9307",(480) 538-3200
//43,"Entegrity Ear, Nose and Throat Specialists",Jeffrey,Dyer,"Ear, Nose & Throat",6950 E. Chauncey Ln.,Ste. 100,Phoenix,AZ,85054,"33.652101, -111.9307",(480) 538-3200
//43,"Entegrity Ear, Nose and Throat Specialists",Christopher,Lykins,"Ear, Nose & Throat",6950 E. Chauncey Ln.,Ste. 100,Phoenix,AZ,85054,"33.652101, -111.9307",(480) 538-3200
//45,Four Peaks Neurology,Fern,Arlen,Neurology,9746 N. 90th Pl.,Ste. 203,Scottsdale,AZ,85258,"33.573905, -111.885649",(480) 614-0707
//45,Four Peaks Neurology,Constantine,Moschonas,Neurology,9746 N. 90th Pl.,Ste. 203,Scottsdale,AZ,85258,"33.573905, -111.885649",(480) 614-0707
//45,Four Peaks Neurology,Marisa,Sosinsky,Neurology,9746 N. 90th Pl.,Ste. 203,Scottsdale,AZ,85258,"33.573905, -111.885649",(480) 614-0707
//46,Gary Adler M.D.,Gary,Adler,Hand Surgery,13840 N. Northsight Blvd.,Ste. 121,Scottsdale,AZ,85260,"33.611938, -111.896718",(480) 860-8380
//47,Gary M. Weiner M.D.,Gary,Weiner,Orthopedic Surgeon,7301 E. 2nd St.,Ste. 206,Scottsdale,AZ,85251,"33.491053, -111.924134",(480) 947-3700
//49,"Gregory M. Crever, M.D.",Gregory,Crever,Family Medicine,8600 E. Via de Ventura,Ste. 101,Scottsdale,AZ,85258,"33.554202, -111.895889",(480) 991-3480
//51,NOAH-Heuser Family Medicine Center  Scottsdale Healthcare,Marvin,Bell,Family Medicine,7301 E. 2nd St.,Ste. 210,Scottsdale,AZ,85251,"33.491053, -111.924134",(480) 882-4545
//51,NOAH-Heuser Family Medicine Center  Scottsdale Healthcare,Cynthia,Kegowicz,Family Medicine,7301 E. 2nd St.,Ste. 210,Scottsdale,AZ,85251,"33.491053, -111.924134",(480) 882-4545
//51,NOAH-Heuser Family Medicine Center  Scottsdale Healthcare,Robert,Marlow,Family Medicine,7301 E. 2nd St.,Ste. 210,Scottsdale,AZ,85251,"33.491053, -111.924134",(480) 882-4545
//51,NOAH-Heuser Family Medicine Center  Scottsdale Healthcare,Darlene,Moyer,Family Medicine,7301 E. 2nd St.,Ste. 210,Scottsdale,AZ,85251,"33.491053, -111.924134",(480) 882-4545
//51,NOAH-Heuser Family Medicine Center  Scottsdale Healthcare,John,Pope,Pediatrics,7301 E. 2nd St.,Ste. 210,Scottsdale,AZ,85251,"33.491053, -111.924134",(480) 882-4545
//51,NOAH-Heuser Family Medicine Center  Scottsdale Healthcare,Jennifer,Rosas,Family Medicine,7301 E. 2nd St.,Ste. 210,Scottsdale,AZ,85251,"33.491053, -111.924134",(480) 882-4545
//51,NOAH-Heuser Family Medicine Center  Scottsdale Healthcare,Richard,Rutkowski,Family Medicine,7301 E. 2nd St.,Ste. 210,Scottsdale,AZ,85251,"33.491053, -111.924134",(480) 882-4545
//51,NOAH-Heuser Family Medicine Center  Scottsdale Healthcare,Javier,Zayas-Bazan,Family Medicine,7301 E. 2nd St.,Ste. 210,Scottsdale,AZ,85251,"33.491053, -111.924134",(480) 882-4545
//52,Horizon Eye Specialists and Lasik Center,Angela,Herro,Ophthalmology,16150 N. Arrowhead Fountain Center Dr.,Ste. H192,Peoria,AZ,85382,"33.635010, -112.236999",(602) 467-4966
//52,Horizon Eye Specialists and Lasik Center,Jonathan,Levin,Ophthalmology,16150 N. Arrowhead Fountain Center Dr.,Ste. H192,Peoria,AZ,85382,"33.635010, -112.236999",(602) 467-4966
//52,Horizon Eye Specialists and Lasik Center,Angela,Herro,Ophthalmology,18325 N. Allied Way,Ste. 100,Phoenix,AZ,85054,"33.652904, -111.929586",(602) 467-4966
//52,Horizon Eye Specialists and Lasik Center,Jonathan,Levin,Ophthalmology,18325 N. Allied Way,Ste. 100,Phoenix,AZ,85054,"33.652904, -111.929586",(602) 467-4966
//52,Horizon Eye Specialists and Lasik Center,Robert,McCulloch,Ophthalmology,18325 N. Allied Way,Ste. 100,Phoenix,AZ,85054,"33.652904, -111.929586",(602) 467-4966
//52,Horizon Eye Specialists and Lasik Center,Jonathan,Levin,Ophthalmology,3030 N. 3rd  St.,Ste. 1250,Phoenix,AZ,85012,"33.483318, -112.069884",(602) 467-4966
//52,Horizon Eye Specialists and Lasik Center,Angela,Herro,Ophthalmology,3030 N. 3rd St.,Ste. 1250,Phoenix,AZ,85012,"33.483318, -112.069884",(602) 467-4966
//52,Horizon Eye Specialists and Lasik Center,Robert,McCulloch,Ophthalmology,3030 N. 3rd St.,Ste. 1250,Phoenix,AZ,85012,"33.483318, -112.069884",(602) 467-4966
//53,Jamie Kapner M.D.,Jamie,Kapner,Urology,10210 N. 92nd St.,Ste. 100,Scottsdale,AZ,85258,"33.579266, -111.882546",(480) 860-6486
//54,"Ortho Arizona/John K. Bradway, M.D.",John,Bradway,Orthopedic Surgeon,10213 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.578569, -111.878737",(480) 860-6005
//55,Kids Connection Pediatrics,Kara,Tiffany,Pediatrics,3815 E. Bell Rd.,,Phoenix,AZ,85032,"33.640261, -111.999902",(623) 466-7469
//57,Lifescape Medical Associates,Jennifer,King,Family Medicine,8757 E. Bell Rd.,,Scottsdale,AZ,85260,"33.639777, -111.893787",(480) 860-5500
//57,Lifescape Medical Associates,William,Strohman,Family Medicine,8757 E. Bell Rd.,,Scottsdale,AZ,85260,"33.639777, -111.893787",(480) 860-5500
//58,Scottsdale Family Physicians,Marcia,Sistek,Family Medicine,9755 N. 90th St.,Ste. C200,Scottsdale,AZ,85258,"33.574598, -111.885691",(480) 661-1755
//60,Arizona Orthopedic and Sports Medicine Specialists,Michael,Brennan,Orthopedic Surgeon,2222 E. Highland Ave.,Ste. 425,Phoenix,AZ,85016,"33.506340, -112.033876",(602) 667-6640
//61,Najma Usmani M.D.,Najma,Usmani,Pulmonary-Critical Care,7331 E. Osborn Rd.,Ste. 205,Scottsdale,AZ,85251,"33.487638, -111.924263",(480) 994-9838
//62,Cardiovascular Institute of Scottsdale ,Nassim,Haddad,Cardiology,9445 E. Ironwood Square Dr.,Ste. 110,Scottsdale,AZ,85258,"33.577634, -111.877627",(480) 747-6532
//63,NKL Neurology,Nida,Laurin,Neurology,9817 N. 95th St.,Ste. 110,Scottsdale,AZ,85258,"33.575614, -111.875567",(480) 779-3997
//64,Neighborhood Outreach Access for Health  Scottsdale Healthcare,Alan,Schalscha,Family Medicine,11130 E. Cholla St.,Bldg. I,Scottsdale,AZ,85259,"33.587800, -111.839916",(480) 882-7520
//64,Neighborhood Outreach Access for Health  Scottsdale Healthcare,Stephanie,Briney,Family Medicine,1300 N. 48th St.,,Phoenix,AZ,85008,"33.462150, -111.981552",(602) 845-4201
//66,North Scottsdale Family Medicine,Paul,Babey,Family Medicine,6501 E. Greenway Pkwy.,Ste. 160,Scottsdale,AZ,85254,"33.624963, -111.94189",(480) 948-9903
//66,North Scottsdale Family Medicine,Joseph,Brewster,Family Medicine,6501 E. Greenway Pkwy.,Ste. 160,Scottsdale,AZ,85254,"33.624963, -111.94189",(480) 948-9903
//66,North Scottsdale Family Medicine,Robert,Hamilton,Family Medicine,6501 E. Greenway Pkwy.,Ste. 160,Scottsdale,AZ,85254,"33.624963, -111.94189",(480) 948-9903
//66,North Scottsdale Family Medicine,Gerald,Muncy,Family Medicine,6501 E. Greenway Pkwy.,Ste. 160,Scottsdale,AZ,85254,"33.624963, -111.94189",(480) 948-9903
//68,Palo Verde Hematology Oncology,Nazish,Ahmad,Hematology-Oncology,19841 N. 27th Ave.,Ste. 103,Phoenix,AZ,85027,"33.667073, -112.115813",(480) 941-1211
//68,Palo Verde Hematology Oncology,Nazish,Ahmad,Hematology-Oncology,5601 W. Eugie Ave.,Ste. 106,Glendale,AZ,85304,"33.606721, -112.180929",(602) 978-6255
//68,Palo Verde Hematology Oncology,Nazish,Ahmad,Hematology-Oncology,7373 N. Scottsdale Rd.,Bldg. E-100,Scottsdale,AZ,85032,"33.544895, -111.925094",(480) 941-1211
//68,Palo Verde Hematology Oncology,Manpreet,Chadha,Hematology-Oncology,7373 N. Scottsdale Rd.,,Scottsdale,AZ,85258,"33.544895, -111.925094",(480) 941-1211
//68,Palo Verde Hematology Oncology,Rajinder,Grover,Hematology-Oncology,7373 N. Scottsdale Rd.,,Scottsdale,AZ,85258,"33.544895, -111.925094",(480) 941-1211
//68,Palo Verde Hematology Oncology,Maqbool,Halepota,Hematology-Oncology,7373 N. Scottsdale Rd.,,Scottsdale,AZ,85258,"33.544895, -111.925094",(480) 941-1211
//68,Palo Verde Hematology Oncology,Martin,Langford,Hematology-Oncology,7373 N. Scottsdale Rd.,,Scottsdale,AZ,85258,"33.544895, -111.925094",(480) 941-1211
//68,Palo Verde Hematology Oncology,Demetrio,Mamani,Hematology-Oncology,7373 N. Scottsdale Rd.,,Scottsdale,AZ,85258,"33.544895, -111.925094",(480) 941-1211
//68,Palo Verde Hematology Oncology,Amol,Rakkar,Hematology-Oncology,7373 N. Scottsdale Rd.,,Scottsdale,AZ,85258,"33.544895, -111.925094",(480) 941-1211
//68,Palo Verde Hematology Oncology,Haider,Zafar,Hematology-Oncology,7373 N. Scottsdale Rd.,,Scottsdale,AZ,85258,"33.544895, -111.925094",(480) 941-1211
//69,Paradise Valley Allergy Associates ,Richard,Keightley,Allergy,20940 N. Tatum Blvd.,Ste. 205,Phoenix,AZ,85050,"33.675675, -111.979357",(480) 991-1930
//70,A.O.A. Paradise Valley OBGYN,Chelsea,Crum,OB/GYN,10261 N. 92nd St.,,Scottsdale,AZ,85258,"33.579002, -111.879076",(480) 443-4437
//70,A.O.A. Paradise Valley OBGYN,Mary,Deka,OB/GYN,10261 N. 92nd St.,,Scottsdale,AZ,85258,"33.579002, -111.879076",(480) 443-4437
//70,A.O.A. Paradise Valley OBGYN,Janice,Donnelly,OB/GYN,10261 N. 92nd St.,,Scottsdale,AZ,85258,"33.579002, -111.879076",(480) 443-4437
//70,A.O.A. Paradise Valley OBGYN,Robert,Newman,OB/GYN,10261 N. 92nd St.,,Scottsdale,AZ,85258,"33.579002, -111.879076",(480) 443-4437
//71,Peter W. Mitchell M.D.,Peter,Mitchell,Orthopedic Surgeon,2222 E. Highland Ave.,Ste. 425,Phoenix,AZ,85016,"33.506340, -112.033876",(602) 667-6640
//73,Phoenix Orthopedic Group,Robert,Mileski,Orthopedic Surgeon,2222 E. Highland Ave.,Ste. 203,Phoenix,AZ,85016,"33.506340, -112.033876",(602) 277-1558
//73,Phoenix Orthopedic Group,Robert,Mileski,Orthopedic Surgeon,9941 N. 95th St.,Ste. 101,Scottsdale,AZ,85258,"33.576926, -111.875783",(602) 277-1558
//74,Radiation Oncologists of Central Arizona/Phoenix Cyberknife,John,Kresl,Radiation-Oncology,4611 E. Shea Blvd.,Ste. 120,Phoenix,AZ,85028,"33.582361, -111.981867",(602) 441-3845
//74,Radiation Oncologists of Central Arizona/Phoenix Cyberknife,Lauren,Stegman,Radiation-Oncology,4611 E. Shea Blvd.,Ste. 120,Phoenix,AZ,85028,"33.582361, -111.981867",(602) 441-3845
//74,Radiation Oncologists of Central Arizona/Phoenix Cyberknife,Sandra,Zaky,Radiation-Oncology,4611 E. Shea Blvd.,Ste. 120,Phoenix,AZ,85028,"33.582361, -111.981867",(602) 441-3845
//75,Reddy GI Associates,Sudhakar,Reddy,Gastroenterology,595 N. Dobson Rd.,Ste. A15,Chandler,AZ,85224,"33.313004, -111.875077",(480) 393-0575
//77,Rimma Finkel M.D.,Rimma,Finkel,Plastic Surgery,3815 E. Bell Rd.,Ste. 2200,Phoenix,AZ,85032,"33.640261, -111.999902",(602) 931-4684
//78,Scottsdale Surgical Consultants,Tom,Wolvos,General Surgery,3501 N. Scottsdale Rd.,Ste. 234,Scottsdale,AZ,85251,"33.488980, -111.925842",(480) 421-1991
//79,Scottsdale Cardiovascular Center,Berkley,Benneson,Cardiology,10250 N. 92nd St.,Ste. 202,Scottsdale,AZ,85258,"33.580472, -111.882766",(480) 945-3535
//79,Scottsdale Cardiovascular Center,Philip,Gideon,Cardiology,10250 N. 92nd St.,Ste. 202,Scottsdale,AZ,85258,"33.580472, -111.882766",(480) 945-3535
//79,Scottsdale Cardiovascular Center,Berkley,Benneson,Cardiology,3099 Civic Center Plaza,,Scottsdale,AZ,85251,"33.483625, -111.92161",(480) 945-3535
//79,Scottsdale Cardiovascular Center,Philip,Gideon,Cardiology,3099 Civic Center Plaza,,Scottsdale,AZ,85251,"33.483625, -111.92161",(480) 945-3535
//79,Scottsdale Cardiovascular Center,Bradley,Oswood,Cardiology,3099 Civic Center Plaza,,Scottsdale,AZ,85251,"33.483625, -111.92161",(480) 945-3535
//79,Scottsdale Cardiovascular Center,Scott,Robertson,Cardiology,3099 Civic Center Plaza,,Scottsdale,AZ,85251,"33.483625, -111.92161",(480) 945-3535
//79,Scottsdale Cardiovascular Center,Alan,Tenaglia,Cardiology,3099 Civic Center Plaza,,Scottsdale,AZ,85251,"33.483625, -111.92161",(480) 945-3535
//79,Scottsdale Cardiovascular Center,Kris,Vijay,Cardiology,3099 Civic Center Plaza,,Scottsdale,AZ,85251,"33.483625, -111.92161",(480) 945-3535
//81,Scottsdale Center for Women's Health,Russell,Bartels,OB/GYN,8415 N. Pima Rd.,Ste. 210,Scottsdale,AZ,85258,"33.557086, -111.890739",(480) 425-8700
//81,Scottsdale Center for Women's Health,Burt,Webb,OB/GYN,8415 N. Pima Rd.,Ste. 210,Scottsdale,AZ,85258,"33.557086, -111.890739",(480) 425-8700
//82,Scottsdale CVT Surgeons,Thomas,Wareing,Vascular Surgery,7301 E. 2nd St.,Ste. 310,Scottsdale,AZ,85251,"33.491053, -111.924134",(480) 947-7738
//83,Scottsdale Critical Care,Tyler,Glenn,Intensivists,7449 E. Osborn Rd.,Ste. 7,Scottsdale,AZ,85251,"33.487252, -111.920662",(480) 947-1130
//83,Scottsdale Critical Care,Kim,Josen,Intensivists,7449 E. Osborn Rd.,Ste. 7,Scottsdale,AZ,85251,"33.487252, -111.920662",(480) 947-1130
//83,Scottsdale Critical Care,Manish,Patel,Intensivists,7449 E. Osborn Rd.,Ste. 7,Scottsdale,AZ,85251,"33.487252, -111.920662",(480) 947-1130
//83,Scottsdale Critical Care,Christopher,Roberts,Intensivists,7449 E. Osborn Rd.,Ste. 7,Scottsdale,AZ,85251,"33.487252, -111.920662",(480) 947-1130
//83,Scottsdale Critical Care,Randy,Weisman,Intensivists,7449 E. Osborn Rd.,Ste. 7,Scottsdale,AZ,85251,"33.487252, -111.920662",(480) 947-1130
//84,Scottsdale Emergency Associates,Stephen,Andersen,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Teri,Bagnasco,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Eric,Barroso,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Michael,Bundschuh,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Taylor,Cardall,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Franco,Castro-Marin,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Christopher,Courtney,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Stacy,Einerson,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Brit,Ferrell,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Charles,Finch,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Paul,Flatley,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,John,Green,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,David,Guttman,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Gregory,Harders,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Ajit,Itty,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Michael,Jonas,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Hanifa,Jones,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Brent,Larsen,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Robert,Londeree,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Christopher,Marcuzzo,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Vincent,Marino,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Glen,McCracken,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Craig,Norquist,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Michael,Pfleger,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Matthew,Porter,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Wendy,Prynn,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Ross,Rodgers,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Robin,Samaddar,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Kris,Samaddar,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Joyce,Schmidt,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Jesse,Shriki,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Douglas,Smith,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Arthur,Smolensky,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Larry,Sokol,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Kurt,Solem,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Denis,Stizza,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Eric,Van Moorlehem,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Jon,Vasquez,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//84,Scottsdale Emergency Associates,Paige,Waslewski,Emergency Medicine,7400 E. Osborn Rd.,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 882-4809
//86,HonorHealth Bariatric Center,Jason,Reynoso,Bariatrics,10210 N. 92nd St.,,Scottsdale,AZ,85258,"33.579266, -111.882546",(480) 882-7460
//86,HonorHealth Bariatric Center,James,Swain,Bariatrics,10210 N. 92nd St.,,Scottsdale,AZ,85258,"33.579266, -111.882546",(480) 882-7460
//88,HonorHealth Neurology - Shea,Jeffrey,Becker,Neurohospitalist,10250 N. 92nd St.,Ste. 304,Scottsdale,AZ,85258,"33.580472, -111.882766",(480) 451-6798
//88,HonorHealth Neurology - Shea,Charles,Crinnian,Neurohospitalist,10250 N. 92nd St.,Ste. 304,Scottsdale,AZ,85258,"33.580472, -111.882766",(480) 451-6798
//89,HonorHealth Medical Group - Arcadia 100,Frank,Cibulka,Family Medicine,4840 E. Indian School Rd.,Ste. 100,Phoenix,AZ,85018,"33.495311, -111.976768",(480) 882-7360
//89,HonorHealth Medical Group - Arcadia 100,Stacy,Gustin,Family Medicine,4840 E. Indian School Rd.,Ste. 100,Phoenix,AZ,85018,"33.495311, -111.976768",(480) 882-7360
//89,HonorHealth Medical Group - Arcadia 100,Janette,Reeves,Family Medicine,4840 E. Indian School Rd.,Ste. 100,Phoenix,AZ,85018,"33.495311, -111.976768",(480) 882-7360
//90,HonorHealth Medical Group - Arcadia 101,Eric,Goldberg,Internal Medicine,4840 E. Indian School Rd.,Ste. 101,Phoenix,AZ,85018,"33.495311, -111.976768",(480) 882-7350
//90,HonorHealth Medical Group - Arcadia 101,Tiffany,Pankow,Family Medicine,4840 E. Indian School Rd.,Ste. 101,Phoenix,AZ,85018,"33.495311, -111.976768",(480) 882-7350
//90,HonorHealth Medical Group - Arcadia 101,Ira,Ungar,Family Medicine,4840 E. Indian School Rd.,Ste. 101,Phoenix,AZ,85018,"33.495311, -111.976768",(480) 882-7350
//91,HonorHealth Surgical and Trauma Specialists,Denise,Cornejo,General Surgery/Trauma-Crit Care,3501 N. Scottsdale Rd.,Ste. 320,Scottsdale,AZ,85251,"33.488980, -111.925842",(480) 882-5730
//91,HonorHealth Surgical and Trauma Specialists,Parker,Fillmore,General Surgery/Trauma-Crit Care,3501 N. Scottsdale Rd.,Ste. 320,Scottsdale,AZ,85251,"33.488980, -111.925842",(480) 882-5730
//91,HonorHealth Surgical and Trauma Specialists,Charles,Hu,General Surgery/Trauma-Crit Care,3501 N. Scottsdale Rd.,Ste. 320,Scottsdale,AZ,85251,"33.488980, -111.925842",(480) 882-5730
//91,HonorHealth Surgical and Trauma Specialists,Frank,Mitchell,General Surgery/Trauma-Crit Care,3501 N. Scottsdale Rd.,Ste. 320,Scottsdale,AZ,85251,"33.488980, -111.925842",(480) 882-5730
//92,HonorHealth Urgent Care Plus,Louis,Hagler,Urgent Care,13843 N. Tatum Blvd.,Ste. 1,Phoenix,AZ,85032,"33.613074, -111.977081",(480) 323-3366
//92,HonorHealth Urgent Care Plus,Mufid,Khoury,Urgent Care,13843 N. Tatum Blvd.,Ste. 1,Phoenix,AZ,85032,"33.613074, -111.977081",(480) 323-3366
//93,HonorHealth Heart Group - Shea,Robert,Burke,Cardiology,10101 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.578716, -111.88012",(480) 882-7450
//93,HonorHealth Heart Group - Shea,Neil,Goldberg,Cardiology,10101 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.578716, -111.88012",(480) 882-7450
//93,HonorHealth Heart Group - Shea,Nikhil,Iyengar,Cardiology,10101 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.578716, -111.88012",(480) 882-7450
//93,HonorHealth Heart Group - Shea,Kevin,Klassen,Cardiology,10101 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.578716, -111.88012",(480) 882-7450
//93,HonorHealth Heart Group - Shea,David,Rizik,Cardiology,10101 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.578716, -111.88012",(480) 882-7450
//95,Scottsdale Medical Associates,Alpa,Shah,Pulmonary-Critical Care,7331 E. Osborn Rd.,Ste. 205,Scottsdale,AZ,85259,"33.487638, -111.924263",(480) 994-9838
//96,Scottsdale Obstetrics and Gynecology,Eric,Reuss,OB/GYN,7331 E. Osborn Rd.,Ste. 305,Scottsdale,AZ,85251,"33.487638, -111.924263",(480) 945-4849
//97,Scottsdale Pathology Associates,Ted,Allred,Pathology,9003 E. Shea Blvd.,,Scottsdale,AZ,85260,"33.580949, -111.885247",(480) 323-3383
//97,Scottsdale Pathology Associates,Cory,Fraser,Pathology,9003 E. Shea Blvd.,,Scottsdale,AZ,85260,"33.580949, -111.885247",(480) 323-3383
//97,Scottsdale Pathology Associates,Sharon,Gburek,Pathology,9003 E. Shea Blvd.,,Scottsdale,AZ,85260,"33.580949, -111.885247",(480) 323-3383
//97,Scottsdale Pathology Associates,Steven,Gurley,Pathology,9003 E. Shea Blvd.,,Scottsdale,AZ,85260,"33.580949, -111.885247",(480) 323-3383
//97,Scottsdale Pathology Associates,Bradford,Halliday,Pathology,9003 E. Shea Blvd.,,Scottsdale,AZ,85260,"33.580949, -111.885247",(480) 323-3383
//97,Scottsdale Pathology Associates,Denise,Haynik,Pathology,9003 E. Shea Blvd.,,Scottsdale,AZ,85260,"33.580949, -111.885247",(480) 323-3383
//97,Scottsdale Pathology Associates,James,Newell,Pathology,9003 E. Shea Blvd.,,Scottsdale,AZ,85260,"33.580949, -111.885247",(480) 323-3383
//97,Scottsdale Pathology Associates,David,Sedlock,Pathology,9003 E. Shea Blvd.,,Scottsdale,AZ,85260,"33.580949, -111.885247",(480) 323-3383
//98,Scottsdale Pediatric Center,Traci,Hurley,Pediatrics,10752 N. 89th Pl.,Ste. 126,Scottsdale,AZ,85260,"33.584397, -111.888401",(480) 860-1161
//98,Scottsdale Pediatric Center,Wendy,Kaye,Pediatrics,10752 N. 89th Pl.,Ste. 126,Scottsdale,AZ,85260,"33.584397, -111.888401",(480) 860-1161
//98,Scottsdale Pediatric Center,Russelle,Wallace,Pediatrics,10752 N. 89th Pl.,Ste. 126,Scottsdale,AZ,85260,"33.584397, -111.888401",(480) 860-1161
//99,Scottsdale Perinatal Associates,Karrie,Francois,OB/GYN-Perinatal,6950 E. Chauncey Ln.,Ste. 150,Phoenix,AZ,85054,"33.652101, -111.9307",(480) 970-7664
//99,Scottsdale Perinatal Associates,Cathleen,Harris,OB/GYN-Perinatal,6950 E. Chauncey Ln.,Ste. 150,Phoenix,AZ,85054,"33.652101, -111.9307",(480) 970-7664
//100,Scottsdale Physicians Group,Payam,Azima,Hospitalist,8328 E. Hartford Dr.,,Scottsdale,AZ,85255,"33.642856, -111.899696",(480) 214-9720
//100,Scottsdale Physicians Group,Harjinder,Bal,Hospitalist,8328 E. Hartford Dr.,,Scottsdale,AZ,85255,"33.642856, -111.899696",(480) 214-9720
//100,Scottsdale Physicians Group,Russell,Esquivel,Hospitalist,8328 E. Hartford Dr.,,Scottsdale,AZ,85255,"33.642856, -111.899696",(480) 214-9720
//100,Scottsdale Physicians Group,Gregory,Gargiulo,Hospitalist,8328 E. Hartford Dr.,,Scottsdale,AZ,85255,"33.642856, -111.899696",(480) 214-9720
//100,Scottsdale Physicians Group,Raad,Hindosh,Hospitalist,8328 E. Hartford Dr.,,Scottsdale,AZ,85255,"33.642856, -111.899696",(480) 214-9720
//100,Scottsdale Physicians Group,Peter,Parker,Hospitalist,8328 E. Hartford Dr.,,Scottsdale,AZ,85255,"33.642856, -111.899696",(480) 214-9720
//102,Scottsdale Urologic Surgeons,Mitchell,Kaye,Urology,7301 E. 2nd St.,Ste. 308,Scottsdale,AZ,85251,"33.491053, -111.924134",(480) 860-6486
//103,Scottsdale Women's Care,Sally,Wareing,OB/GYN,7301 E. 2nd St.,Ste. 310,Scottsdale,AZ,85251,"33.491053, -111.924134",(480) 947-8090
//104,Shree Physicians,Sadan,Patel,Internal Medicine,8404 E. Shea Blvd.,Ste. 100,Scottsdale,AZ,85260,"33.582463, -111.873618",(480) 584-5959
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Rodney,Owen,Radiology,10290 N. 92nd St.,Ste. 100,Scottsdale,AZ,85258,"33.580242, -111.883792",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",John,Millstine,Radiology,10575 N. Tatum Blvd.,Ste. C,Paradise Valley,AZ,85253,"33.581747, -111.977148",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Nishant,Verma,Radiology,10575 N. Tatum Blvd.,Ste. C,Paradise Valley,AZ,85253,"33.581747, -111.977148",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Chad,Palmer,Radiology,13620 N. Saguaro Blvd.,Ste. 100,Scottsdale,AZ,85268,"33.608952, -111.715067",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Sean,Perini,"Radiology, Radiology - Interventional",13620 N. Saguaro Blvd.,Ste. 100,Scottsdale,AZ,85268,"33.608952, -111.715067",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Michelle,Dubes Lai,Radiology,20201 N. Scottsdale Healthcare,Ste. 190,Scottsdale,AZ,85255,"33.671015, -111.920379",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Sunil,Ram,Radiology,20201 N. Scottsdale Healthcare,Ste. 190,Scottsdale,AZ,85255,"33.671015, -111.920379",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Steven,Wise,Radiology,20201 N. Scottsdale Healthcare,Ste. 190,Scottsdale,AZ,85255,"33.671015, -111.920379",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Jane,Sohn,Radiology,20940 N. Tatum Blvd.,Ste. 390,Phoenix,AZ,85050,"33.675675, -111.979357",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Jared,Allen,Radiology,2222 E. Highland Ave.,Ste. 120,Phoenix,AZ,85016,"33.506340, -112.033876",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Mark,Kuo,Radiology,2222 E. Highland Ave.,Ste. 120,Scottsdale,AZ,85016,"33.506340, -112.033876",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Christopher,Salmon,Radiology,2222 E. Highland Ave.,Ste. 120,Scottsdale,AZ,85016,"33.506340, -112.033876",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Jimmy,Leung,Radiology,3501 N. Scottsdale Rd.,Ste. 130,Scottsdale,AZ,85251,"33.488980, -111.925842",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Adrian,Moyer,Radiology,3501 N. Scottsdale Rd.,Ste. 130,Scottsdale,AZ,85251,"33.488980, -111.925842",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Raymond,Murphy,Radiology,3501 N. Scottsdale Rd.,Ste. 130,Scottsdale,AZ,85251,"33.488980, -111.925842",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Daniel,Maki,Radiology,3645 S. Rome St.,Ste. 101,Gilbert,AZ,85297,"33.284785, -111.750309",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Charlene,Whitfill,Radiology,3645 S. Rome St.,Ste. 101,Gilbert,AZ,85297,"33.284785, -111.750309",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Denise,Reddy,Radiology,7301 E. 2nd St.,Ste. 112-114,Scottsdale,AZ,85251,"33.491053, -111.924134",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Terry,Reeves,Radiology,7301 E. 2nd St.,Ste. 112-114,Scottsdale,AZ,85251,"33.491053, -111.924134",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Tyler,Gasser,Radiology,7400 E. Osborn Rd. ,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Rolf,Hultsch,"Radiology, Radiology - Interventional",7400 E. Osborn Rd. ,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",William,Jones,Radiology,7400 E. Osborn Rd. ,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Mark,Jorgensen,"Radiology, Radiology - Interventional",7400 E. Osborn Rd. ,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Jason,Kerr,"Radiology, Radiology - Interventional",7400 E. Osborn Rd. ,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Christopher,May,Radiology,7400 E. Osborn Rd. ,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Ronald,Newbold,"Radiology, Radiology - Interventional",7400 E. Osborn Rd. ,,Scottsdale,AZ,85251,"33.488673, -111.923153",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Glenn,Cook,"Radiology, Radiology - Interventional",7400 E. Thompson Peak Pkwy.,,Scottsdale,AZ,85255,"33.670695, -111.922033",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",John,Neil,"Radiology, Radiology - Interventional",7400 E. Thompson Peak Pkwy.,,Scottsdale,AZ,85255,"33.670695, -111.922033",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Eric,Kovalsky,Radiology,9003 E. Shea Blvd. ,Ste. B-110,Scottsdale,AZ,85258,"33.580949, -111.885247",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Irina,Nistor,Radiology,9003 E. Shea Blvd. ,Ste. B-110,Scottsdale,AZ,85258,"33.580949, -111.885247",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Gavin,Slethaug,"Radiology, Radiology - Interventional",9003 E. Shea Blvd. ,Ste. B-110,Scottsdale,AZ,85258,"33.580949, -111.885247",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Monali,Gupta,Radiology,9700 N. 91st St.,Ste. B-110,Scottsdale,AZ,85258,"33.573686, -111.883471",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Howard,Harvin,Radiology,9700 N. 91st St.,Ste. C200,Scottsdale,AZ,85252,"33.573686, -111.883471",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",William,Horsley,"Radiology, Radiology - Interventional",9700 N. 91st St.,Ste. B-110,Scottsdale,AZ,85258,"33.573686, -111.883471",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",Ronald,Korn,Radiology,9700 N. 91st St.,Ste. B-110,Scottsdale,AZ,85258,"33.573686, -111.883471",(480) 425-5000
//105,"Scottsdale Medical Imaging, Ltd. (SMIL)",William,Taylor,Radiology,9700 N. 91st St.,Ste. C200,Scottsdale,AZ,85252,"33.573686, -111.883471",(480) 425-5000
//106,Sonoran Consultants in OB/GYN,Marilyn,Laughead,OB/GYN,9500 E. Ironwood Square Dr.,Ste. 124,Scottsdale,AZ,85258,"33.578467, -111.876259",(480) 860-0550
//109,Southwest Heart and Lung,Kenneth,Ashton,Cardiovascular Surgery,10930 N. Tatum Blvd.,Ste. 103,Phoenix,AZ,85028,"33.585947, -111.978307",(602) 263-7600
//109,Southwest Heart and Lung,Kevin,Brady,Cardiovascular Surgery,10930 N. Tatum Blvd.,Ste. 103,Phoenix,AZ,85028,"33.585947, -111.978307",(602) 263-7600
//110,Ironwood Physicians,Diane,Recine,Radiation-Oncology,10460 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.581146, -111.883676",(480) 278-8300
//110,Ironwood Physicians,Rakesh,Bagai,Hematology-Oncology,11209 N. Tatum Blvd.,Ste. 260,Phoenix,AZ,85028,"33.588196, -111.976491",(602) 494-6800
//110,Ironwood Physicians,James,Ewing,Hematology-Oncology,11209 N. Tatum Blvd.,Ste. 260,Phoenix,AZ,85028,"33.588196, -111.976491",(602) 494-6800
//110,Ironwood Physicians,Jeffrey,Isaacs,Hematology-Oncology,11209 N. Tatum Blvd.,Ste. 260,Phoenix,AZ,85028,"33.588196, -111.976491",(602) 494-6800
//110,Ironwood Physicians,Tara,Iyengar,Hematology-Oncology,11209 N. Tatum Blvd.,Ste. 260,Phoenix,AZ,85028,"33.588196, -111.976491",(602) 494-6800
//110,Ironwood Physicians,Boo Ghee,Low,Hematology-Oncology,11209 N. Tatum Blvd.,Ste. 260,Phoenix,AZ,85028,"33.588196, -111.976491",(602) 494-6800
//110,Ironwood Physicians,Davis,Romney,Radiation-Oncology,3645 S. Rome St.,Ste. 209,Gilbert,AZ,85297,"33.284785, -111.750309",(602) 494-6800
//110,Ironwood Physicians,Davis,Romney,Radiation-Oncology,4633 E. Chandler Blvd.,Ste. 100,Chandler,AZ,85048,"33.302357, -111.981202",(602) 494-8600
//110,Ironwood Physicians,Rajesh,Bagai,Hematology-Oncology,5810 W. Beverly Ln.,,Glendale,AZ,85306,"33.634142, -112.183559",(602) 494-6800
//110,Ironwood Physicians,Elisa,Bomgaars,Hematology-Oncology,5810 W. Beverly Ln.,,Glendale,AZ,85306,"33.634142, -112.183559",(602) 494-6800
//110,Ironwood Physicians,Rajesh,Kukunoor,Hematology-Oncology,5810 W. Beverly Ln.,,Glendale,AZ,85306,"33.634142, -112.183559",(602) 494-6800
//110,Ironwood Physicians,Patrick,Miller,Radiation-Oncology,5810 W. Beverly Ln.,,Glendale,AZ,85306,"33.634142, -112.183559",(602) 494-6800
//110,Ironwood Physicians,Murali,Murty,Radiation-Oncology,5810 W. Beverly Ln.,,Glendale,AZ,85306,"33.634142, -112.183559",(602) 494-6800
//110,Ironwood Physicians,Joseph,Nabong,Hematology-Oncology,5810 W. Beverly Ln.,,Glendale,AZ,85306,"33.634142, -112.183559",(602) 494-6800
//110,Ironwood Physicians,Jason,Salganick,Hematology-Oncology,5810 W. Beverly Ln.,,Glendale,AZ,85306,"33.634142, -112.183559",(602) 494-6800
//110,Ironwood Physicians,Aaron,Ambrad,Radiation-Oncology,6111 E. Arbor Ave.,,Mesa,AZ,85206,"33.412887, -111.699382",(480) 981-1326
//110,Ironwood Physicians,Alice,Tsai,Radiation-Oncology,6111 E. Arbor Ave.,,Mesa,AZ,85206,"33.412887, -111.699382",(480) 981-1326
//110,Ironwood Physicians,James,Ewing,Hematology-Oncology,695 S. Dobson Rd.,,Chandler,AZ,85224,"33.294027, -111.873561",(480) 821-2838
//110,Ironwood Physicians,Eric,Olyejar,Radiation-Oncology,695 S. Dobson Rd.,,Chandler,AZ,85224,"33.294027, -111.873561",(480) 821-2838
//110,Ironwood Physicians,Mark,Ono,Radiation-Oncology,695 S. Dobson Rd.,,Chandler,AZ,85224,"33.294027, -111.873561",(480) 821-2838
//110,Ironwood Physicians,Alice,Tsai,Radiation-Oncology,695 S. Dobson Rd.,,Chandler,AZ,85224,"33.294027, -111.873561",(480) 821-2838
//110,Ironwood Physicians,Charles,Woo,Radiation-Oncology,695 S. Dobson Rd.,,Chandler,AZ,85224,"33.294027, -111.873561",(480) 821-2838
//110,Ironwood Physicians,Murali,Murty,Radiation-Oncology,8880 E. Desert Cove Ave.,,Scottsdale,AZ,85260,"33.585284, -111.889344",(480) 314-6670
//110,Ironwood Physicians,Diane,Recine,Radiation-Oncology,8880 E. Desert Cove Ave.,,Scottsdale,AZ,85260,"33.585284, -111.889344",(480) 314-6670
//111,Southwest Kidney Institute,Donn,Hogan,Nephrology,16838 E. Palisades Blvd.,,Fountain Hills,AZ,85268,"33.607965, -111.716663",(480) 610-6100
//111,Southwest Kidney Institute,Divya,Malladi,Nephrology,16838 E. Palisades Blvd.,,Fountain Hills,AZ,85268,"33.607965, -111.716663",(480) 610-6100
//111,Southwest Kidney Institute,Pradeep,Mehra,Nephrology,16838 E. Palisades Blvd.,,Fountain Hills,AZ,85268,"33.607965, -111.716663",(480) 610-6100
//111,Southwest Kidney Institute,Robert,Cohen,Nephrology,337 E. Coronado Rd.,Ste. 201,Phoenix,AZ,85004,"33.467046, -112.067639",(480) 610-6100
//111,Southwest Kidney Institute,Robert,Cohen,Nephrology,9746 N. 90th Pl.,Ste. 205,Scottsdale,AZ,85258,"33.573905, -111.885649",(480) 610-6100
//111,Southwest Kidney Institute,Donn,Hogan,Nephrology,9746 N. 90th Pl.,Ste. 205,Scottsdale,AZ,85258,"33.573905, -111.885649",(480) 610-6100
//111,Southwest Kidney Institute,Divya,Malladi,Nephrology,9746 N. 90th Pl.,Ste. 205,Scottsdale,AZ,85258,"33.573905, -111.885649",(480) 610-6100
//111,Southwest Kidney Institute,Aslam,Pervez,Nephrology,9746 N. 90th Pl.,Ste. 205,Scottsdale,AZ,85258,"33.573905, -111.885649",(480) 610-6100
//112,Specialty Orthopaedic Surgery,Sean,Brimacombe,Orthopedic Surgeon,9700 N. 91st St.,Ste. B108,Scottsdale,AZ,85258,"33.573686, -111.883471",(602) 466-7378
//112,Specialty Orthopaedic Surgery,Frank,Moussa,Orthopedic Surgeon,9700 N. 91st St.,Ste. B108,Scottsdale,AZ,85258,"33.573686, -111.883471",(602) 466-7378
//113,Spectrum Dermatology,Brooke,Jeffy,Dermatology,20950 N. Tatum Blvd.,Ste. 250,Phoenix,AZ,85050,"33.676190, -111.978363",(480) 948-8400
//113,Spectrum Dermatology,Carlos,Rodriguez,Dermatology,20950 N. Tatum Blvd.,Ste. 250,Phoenix,AZ,85050,"33.676190, -111.978363",(480) 948-8400
//113,Spectrum Dermatology,Brooke,Jeffy,Dermatology,4350 E Camelback Rd.,Ste. A200,Phoenix,AZ,85018,"33.510075, -111.987838",(480) 948-8400
//113,Spectrum Dermatology,Carlos,Rodriguez,Dermatology,4350 E. Camelback Rd.,Ste. A200,Phoenix,AZ,85018,"33.510075, -111.987838",(480) 948-8400
//113,Spectrum Dermatology,Randi,Rubenzik,Dermatology,4350 E. Camelback Rd.,Ste. A200,Phoenix,AZ,85018,"33.510075, -111.987838",(480) 948-8400
//113,Spectrum Dermatology,Maya,Thosani,Dermatology,4350 E. Camelback Rd.,Ste. A200,Phoenix,AZ,85018,"33.510075, -111.987838",(480) 948-8400
//113,Spectrum Dermatology,Brooke,Jeffy,Dermatology,7425 E. Shea Blvd.,Ste. 110,Scottsdale,AZ,85260,"33.581766, -111.921336",(480) 948-8400
//113,Spectrum Dermatology,Nancy,Kim,Dermatology,7425 E. Shea Blvd.,Ste. 110,Scottsdale,AZ,85260,"33.581766, -111.921336",(480) 948-8400
//113,Spectrum Dermatology,Carlos,Rodriguez,Dermatology,7425 E. Shea Blvd.,Ste. 110,Scottsdale,AZ,85260,"33.581766, -111.921336",(480) 948-8400
//113,Spectrum Dermatology,Randi,Rubenzik,Dermatology,7425 E. Shea Blvd.,Ste. 110,Scottsdale,AZ,85260,"33.581766, -111.921336",(480) 948-8400
//113,Spectrum Dermatology,Maya,Thosani,Dermatology,7425 E. Shea Blvd.,Ste. 110,Scottsdale,AZ,85260,"33.581766, -111.921336",(480) 948-8400
//114,Spine and Orthopedic Specialists ,Todd,Doerr,Ortho - Spine,16838 E. Palisades Blvd.,Ste. C-153,Fountain Hills,AZ,85268,"33.607965, -111.716663",(480) 353-0446
//114,Spine and Orthopedic Specialists ,Cory,Nelson,Orthopedic Surgeon,16838 E. Palisades Blvd.,Ste. C-153,Fountain Hills,AZ,85268,"33.607965, -111.716663",(480) 353-0446
//114,Spine and Orthopedic Specialists ,Todd,Doerr,Ortho - Spine,20401 N. 73rd St.,Ste.  175,Scottsdale,AZ,85255,"33.673000, -111.923678",(480) 353-0446
//114,Spine and Orthopedic Specialists ,Cory,Nelson,Orthopedic Surgeon,20401 N. 73rd St.,Ste.  175,Scottsdale,AZ,85255,"33.673000, -111.923678",(480) 353-0446
//115,Stephen R. Rosenthal M.D. ,Stephen,Rosenthal,General Surgery,10210 N. 92nd St.,Ste. 103,Scottsdale,AZ,85258,"33.579266, -111.882546",(480) 661-4200
//118,Tara Brodkin M.D.,Tara,Brodkin,OB/GYN,9070 E. Desert Cove Ave.,Ste. 102,Scottsdale,AZ,85260,"33.585610, -111.884972",(480) 860-2322
//119,Tatum Highlands Medical Associates,Peter,Levins,Family Medicine,26224 N. Tatum Blvd.,Ste. 15A,Phoenix,AZ,85050,"33.725205, -111.977954",(480) 663-9632
//120,HonorHealth Medical Group - Thompson Peak,Dee,Allred,Family Medicine,20401 N. 73rd St.,Ste. 105,Scottsdale,AZ,85255,"33.673000, -111.923678",(480) 882-7500
//120,HonorHealth Medical Group - Thompson Peak,Jennifer,Burke,Family Medicine,20401 N. 73rd St.,Ste. 105,Scottsdale,AZ,85255,"33.673000, -111.923678",(480) 882-7500
//120,HonorHealth Medical Group - Thompson Peak,Anuneet,Haas,Internal Medicine,20401 N. 73rd St.,Ste. 105,Scottsdale,AZ,85255,"33.673000, -111.923678",(480) 882-7500
//120,HonorHealth Medical Group - Thompson Peak,Mark,Lewis,Internal Medicine,20401 N. 73rd St.,Ste. 105,Scottsdale,AZ,85255,"33.673000, -111.923678",(480) 882-7500
//120,HonorHealth Medical Group - Thompson Peak,Theodore,Prier,Family Medicine,20401 N. 73rd St.,Ste. 105,Scottsdale,AZ,85255,"33.673000, -111.923678",(480) 882-7500
//120,HonorHealth Medical Group - Thompson Peak,Robert,Segal,Family Medicine,20401 N. 73rd St.,Ste. 105,Scottsdale,AZ,85255,"33.673000, -111.923678",(480) 882-7500
//120,HonorHealth Medical Group - Thompson Peak,Richard,Silver,Internal Medicine,20401 N. 73rd St.,Ste. 105,Scottsdale,AZ,85255,"33.673000, -111.923678",(480) 882-7500
//120,HonorHealth Medical Group - Thompson Peak,Robert,Taxin,Family Medicine,20401 N. 73rd St.,Ste. 105,Scottsdale,AZ,85255,"33.673000, -111.923678",(480) 882-7500
//120,HonorHealth Medical Group - Thompson Peak,James,Vogt,Family Medicine,20401 N. 73rd St.,Ste. 105,Scottsdale,AZ,85255,"33.673000, -111.923678",(480) 882-7500
//121,HonorHealth Gastroenterology - Thompson Peak,Gavin,Levinthal,Gastroenterology,20401 N. 73rd St.,Ste. 210,Scottsdale,AZ,85255,"33.673000, -111.923678",(480) 882-7510
//121,HonorHealth Gastroenterology - Thompson Peak,Stuart,Triester,Gastroenterology,20401 N. 73rd St.,Ste. 210,Scottsdale,AZ,85255,"33.673000, -111.923678",(480) 882-7510
//123,Urology Associates,Bruce,Kletscher,Urology,1313 E. Osborne Rd.,Ste. B150,Phoenix,AZ,85014,"33.487005, -112.054081",(602) 264-4431
//124,Cardiovascular Institute of Scottsdale ,David,Rashduni,Cardiology,10117 N. 92nd St.,Ste. 103,Scottsdale,AZ,85258,"33.578213, -111.880156",(480) 747-6532
//125,Valley Anesthesiology Consultants,Kerry,Ando,"Anesthesiology, Pain Management",1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Stuart,Bass,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Charles,Beaulieu,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Tom,Beer,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Timothy,Beger,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Srinivas,Bollimpalli,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,John,Borrego,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Andrew,Brewer,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Kurt,Budenbender,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Robert,Chavez,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Lawrence,Drewsen,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Brad,Emershad,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,James,Fleck,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Daniel,Gee,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,James,Gilbert,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Eric,Gordon,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Alan,Greenberg,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Ryan,Huffman,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Steven,Kallmeyer,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Lee,Kimball,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Andy,Lee,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Ethan,Lu,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Steven,Manos,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Aubrey,Maze,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Meraj,Mohiuddin,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Greg,Morris,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,William,Nordlie,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Raymond,Oakes,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Stuart,Osmussen,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Steven,Ozer,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Jon,Pace,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Scott,Pearce,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Bruce,Puryear,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Michael,Ray,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Joseph,Sandor,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Brent,Silver,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Stephen,Smith,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Michael,Stearns,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Gregory,Thorley,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Matthew,Waldbusser,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Brennan,Watkins,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Brian,Williams,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Edward,Wintergalen,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Douglas,Wright,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//125,Valley Anesthesiology Consultants,Steven,Yee,Anesthesiology,1850 N. Central Ave.,Ste. 1600,Phoenix,AZ,85004,"33.468547, -112.075085",(602) 262-8916
//126,Valley OB/GYN Associates,Dennis,Eckel,OB/GYN,3501 N. Scottsdale Rd.,Ste. 280,Scottsdale,AZ,85251,"33.488980, -111.925842",(480) 945-6583
//126,Valley OB/GYN Associates,Jean,Moon,OB/GYN,3501 N. Scottsdale Rd.,Ste. 280,Scottsdale,AZ,85251,"33.488980, -111.925842",(480) 945-6583
//128,Valley Surgical Clinics,Alan,Bornstein,General Surgery,10210 N. 92nd St.,Ste. 302,Scottsdale,AZ,85258,"33.579266, -111.882546",(602) 996-4747
//128,Valley Surgical Clinics,Laura,Champagne,General Surgery,10210 N. 92nd St.,Ste. 302,Scottsdale,AZ,85258,"33.579266, -111.882546",(602) 996-4747
//128,Valley Surgical Clinics,Bradford,Doxey,General Surgery,10210 N. 92nd St.,Ste. 302,Scottsdale,AZ,85258,"33.579266, -111.882546",(602) 996-4747
//128,Valley Surgical Clinics,Rick,Low,General Surgery,10210 N. 92nd St.,Ste. 302,Scottsdale,AZ,85258,"33.579266, -111.882546",(602) 996-4747
//128,Valley Surgical Clinics,Francisco,Rodriguez,General Surgery,10210 N. 92nd St.,Ste. 302,Scottsdale,AZ,85258,"33.579266, -111.882546",(602) 996-4747
//128,Valley Surgical Clinics,Alan,Bornstein,General Surgery,3805 E. Bell Rd.,Ste. 4800,Phoenix,AZ,85032,"33.640261, -111.999902",(602) 996-4747
//128,Valley Surgical Clinics,Alan,Bornstein,General Surgery,3805 E. Bell Rd.,Ste. 4800,Phoenix,AZ,85032,"33.640261, -111.999902",(602) 996-4747
//128,Valley Surgical Clinics,Bradford,Doxey,General Surgery,3805 E. Bell Rd.,Ste. 4800,Phoenix,AZ,85032,"33.640261, -111.999902",(602) 996-4747
//128,Valley Surgical Clinics,Bradford,Doxey,General Surgery,3805 E. Bell Rd.,Ste. 4800,Phoenix,AZ,85032,"33.640261, -111.999902",(602) 996-4747
//128,Valley Surgical Clinics,Rick,Low,General Surgery,3805 E. Bell Rd.,Ste. 4800,Phoenix,AZ,85032,"33.640261, -111.999902",(602) 996-4747
//128,Valley Surgical Clinics,Rick,Low,General Surgery,3805 E. Bell Rd.,Ste. 4800,Phoenix,AZ,85032,"33.640261, -111.999902",(602) 996-4747
//128,Valley Surgical Clinics,Francisco,Rodriguez,General Surgery,3805 E. Bell Rd.,Ste. 4800,Phoenix,AZ,85032,"33.640261, -111.999902",(602) 996-4747
//128,Valley Surgical Clinics,Francisco,Rodriguez,General Surgery,3805 E. Bell Rd.,Ste. 4800,Phoenix,AZ,85032,"33.640261, -111.999902",(602) 996-4747
//129,"Vincent J. Russo, M.D. ",Vincent,Russo,Orthopedic Surgeon,10290 N. 92nd St.,Ste. 103,Scottsdale,AZ,85258,"33.580242, -111.883792",(480) 860-1322
//131,Advanced Fertility Care,Frederick,Larsen,Fertility,1550 S. Alma School Rd.,Ste. 100,Mesa,AZ,85210,"33.387913, -111.858281",(480) 874-2229
//131,Advanced Fertility Care,Nathaniel,Zoneraich,Fertility,1550 S. Alma School Rd.,Ste. 100,Mesa,AZ,85210,"33.387913, -111.858281",(480) 874-2229
//131,Advanced Fertility Care,Frederick,Larsen,Fertility,1701 E. Thomas Rd.,Bldg. 1 Ste. 202,Phoenix,AZ,85016,"33.479953, -112.044856",(480) 874-2229
//131,Advanced Fertility Care,Frederick,Larsen,Fertility,9819 N. 95th St.,Ste. 105,Scottsdale,AZ,85258,"33.575606, -111.875064",(480) 874-2229
//131,Advanced Fertility Care,Nathaniel,Zoneraich,Fertility,9819 N. 95th St.,Ste. 105,Scottsdale,AZ,85258,"33.575606, -111.875064",(480) 874-2229
//132,Arizona Oncology Services,David,Beyer,Radiation-Oncology,19646 N. 27th Ave,Ste. 108,Phoenix,AZ,85027,"33.664785, -112.1179",(602) 240-3503
//133,Cardiovascular Institute of Scottsdale ,Michael,Maher,Cardiology,10117 N. 92nd St.,Ste. 103,Scottsdale,AZ,85258,"33.578213, -111.880156",(480) 747-6532
//137,"Allergy, Asthma, and Immunology Associates",Aaron,Davis,Allergy,10200 N. 92nd St.,Ste. 130,Scottsdale,AZ,85258,"33.578334, -111.881415",(480) 614-8011
//137,"Allergy, Asthma, and Immunology Associates",Michael,Manning,Allergy,10200 N. 92nd St.,Ste. 130,Scottsdale,AZ,85258,"33.578334, -111.881415",(480) 614-8011
//137,"Allergy, Asthma, and Immunology Associates",Michael,Manning,Allergy,7514 E. Monterey Way,Ste. 1,Scottsdale,AZ,85251,"33.486170, -111.918718",(480) 949-7377
//138,Virginia G. Piper Cancer Center Clinical Trials,Hani,Babiker,Hematology-Oncology,10510 N. 92nd St.,Ste. 200,Scottsdale,AZ,85258,"33.581397, -111.883127",(480) 323-1350
//138,Virginia G. Piper Cancer Center Clinical Trials,Erkut,Borazanci,Oncology - Clinical Trials,10510 N. 92nd St.,Ste. 200,Scottsdale,AZ,85258,"33.581397, -111.883127",(480) 323-1350
//138,Virginia G. Piper Cancer Center Clinical Trials,Samiel,Ejadi,Oncology - Clinical Trials,10510 N. 92nd St.,Ste. 200,Scottsdale,AZ,85258,"33.581397, -111.883127",(480) 323-1350
//138,Virginia G. Piper Cancer Center Clinical Trials,Jasgit,Sachdev,Oncology - Clinical Trials,10510 N. 92nd St.,Ste. 200,Scottsdale,AZ,85258,"33.581397, -111.883127",(480) 323-1350
//139,QuestMedicine,Elinor,Schottstaedt,Pulmonology,3301 N. Miller Rd.,Ste. 160,Scottsdale,AZ,85251,"33.486379, -111.917111",(480) 990-7200
//140,F. Timm McCarty D.O.,Timm,McCarty,Family Medicine,7555 E. Osborn Rd.,Ste. 104,Scottsdale,AZ,85251,"33.487325, -111.918199",(480) 947-5454
//141,Scottsdale Medical Center,Kelly,Barker,Family Medicine,10117 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.578213, -111.880156",(480) 614-5808
//141,Scottsdale Medical Center,Jason,Richard,Family Medicine,10117 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.578213, -111.880156",(480) 614-5808
//141,Scottsdale Medical Center,Joseph,Rotella,Family Medicine,10117 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.578213, -111.880156",(480) 614-5808
//144,Tatum Internal Medicine and Associates,Vincent,Cariati,Internal Medicine,4729 E. Union Hills Dr.,Ste. 111,Phoenix,AZ,85050,"33.654451, -111.980346",(602) 482-5444
//144,Tatum Internal Medicine and Associates,George,Landrum,Internal Medicine,4729 E. Union Hills Dr.,Ste. 111,Phoenix,AZ,85050,"33.654451, -111.980346",(602) 482-5444
//145,Cactus Pediatric Orthopaedics,Greg,Hrasky,Pediatric Orthopedics,1500 S. Dobson Rd.,Ste. 200,Mesa,AZ,85202,"33.387391, -111.876285",(480) 551-0300
//145,Cactus Pediatric Orthopaedics,Greg,Hrasky,Pediatric Orthopedics,9003 E. Shea Blvd.,,Scottsdale,AZ,85252,"33.580949, -111.885247",(480) 551-0300
//148,Scottsdale Facial & Oral Surgery,James,Bertz,Oral Maxillofacial,3501 N. Scottsdale Rd.,Ste. 110,Scottsdale,AZ,85251,"33.488980, -111.925842",(480) 945-0663
//149,Desert Spine & Sports Physicians,Brad,Sorosky,Physical Medicine and Rehab,3700 N. 24th St.,Ste. 210,Phoenix,AZ,85016,"33.490700, -112.030492",(602) 840-0681
//149,Desert Spine & Sports Physicians,Brad,Sorosky,Physical Medicine and Rehab,6636 E. Baseline Rd.,Ste. 100,Mesa,AZ,85206,"33.381315, -111.691116",(602) 840-0681
//150,Arizona Heart and Lung Surgery,Andrew,Goldstein,Cardiovascular Surgery,10117 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.578213, -111.880156",(480) 767-5544
//151,Arizona Cardiovascular and Thoracic Surgeons,Rajeev,Kathuria,Cardiovascular Surgery,8402 E. Shea Blvd.,Ste. 100,Scottsdale,AZ,85260,"33.582463, -111.873618",(480) 661-0700
//152,Arizona Cardiovascular and Thoracic Surgeons ,Robert,Riley,Cardiovascular Surgery,8402 E. Shea Blvd.,Ste. 100,Scottsdale,AZ,85260,"33.582463, -111.873618",(480) 661-0700
//153,Sonoran Foot Specialist,Lee,Richer,Podiatry,9767 N. 91st St.,Ste. 101,Scottsdale,AZ,85258,"33.573943, -111.882395",(480) 629-5903
//155,Foot and Ankle Center of AZ,Kris,Dinucci,Podiatry,7312 E. Deer Valley Rd.,Ste. 110,Scottsdale,AZ,85255,"33.684847, -111.922701",(480) 342-9999
//156,Fountain Hills Pediatrics and Internal Medicine,Jyoti,Patel,Med-Peds,13620 N. Saguaro Blvd.,Ste. 100,Fountain Hills,AZ,85268,"33.608952, -111.715067",(480) 837-6800
//158,Pinnacle Oncology Hematology,Michael,Gordon,Hematology-Oncology,9055 E. Del Camino Dr.,Ste. 100,Scottsdale,AZ,85258,"33.555484, -111.88692",(480) 922-4600
//158,Pinnacle Oncology Hematology,Giraldo,Kato,Hematology-Oncology,9055 E. Del Camino Dr.,Ste. 100,Scottsdale,AZ,85258,"33.555484, -111.88692",(480) 922-4600
//158,Pinnacle Oncology Hematology,David,Mendelson,Hematology-Oncology,9055 E. Del Camino Dr.,Ste. 100,Scottsdale,AZ,85258,"33.555484, -111.88692",(480) 922-4600
//158,Pinnacle Oncology Hematology,Frank,Tsai,Hematology-Oncology,9055 E. Del Camino Dr.,Ste. 100,Scottsdale,AZ,85258,"33.555484, -111.88692",(480) 922-4600
//161,Valley Pain Consultants,Mark,Spiro,Pain Management,10200 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.578334, -111.881415",(480) 889-0255
//161,Valley Pain Consultants,Monica,Torres,"Pain Management, Physical Medicine and Rehab",10200 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.578334, -111.881415",(480) 889-0255
//161,Valley Pain Consultants,Joseph,Curletta,Pain Management,1331 N. 7th St.,Ste. 355,Phoenix,AZ,85006,"33.463348, -112.064051",(480) 991-3005
//161,Valley Pain Consultants,Samara,Shipon,Pain Management,1331 N. 7th St.,Ste. 355,Phoenix,AZ,85006,"33.463348, -112.064051",(480) 991-3005
//161,Valley Pain Consultants,Monica,Torres,"Pain Management, Physical Medicine and Rehab",1331 N. 7th St.,Ste. 355,Phoenix,AZ,85006,"33.463348, -112.064051",(480) 991-3005
//161,Valley Pain Consultants,Samara,Shipon,Pain Management,2095 W. Pecos Rd.,Ste. A8,Chandler,AZ,85224,"33.290606, -111.878095",(480) 889-0255
//161,Valley Pain Consultants,William,Thompson,Pain Management,2095 W. Pecos Rd.,Ste. A8,Chandler,AZ,85224,"33.290606, -111.878095",(480) 889-0255
//161,Valley Pain Consultants,Samara,Shipon,Pain Management,3483 S. Mercy Rd.,Ste. 102,Gilbert,AZ,85297,"33.286032, -111.74939",(480) 889-0255
//161,Valley Pain Consultants,William,Thompson,Pain Management,3483 S. Mercy Rd.,Ste. 102,Gilbert,AZ,85297,"33.286032, -111.74939",(480) 889-0255
//161,Valley Pain Consultants,Daniel,Choi,Pain Management,5425 E. Bell Rd.,Ste. 115,Scottsdale,AZ,85254,"33.640021, -111.96407",(480) 991-3005
//161,Valley Pain Consultants,Ashu,Goyle,Pain Management,5425 E. Bell Rd.,Ste. 115,Scottsdale,AZ,85254,"33.640021, -111.96407",(480) 991-3005
//161,Valley Pain Consultants,Monica,Torres,"Pain Management, Physical Medicine and Rehab",5425 E. Bell Rd.,Ste. 115,Scottsdale,AZ,85254,"33.640021, -111.96407",(480) 991-3005
//161,Valley Pain Consultants,Daniel,Choi,Pain Management,6780 W. Thunderbird Rd.,Ste. A105,Peoria,AZ,85381,"33.611043, -112.204988",(602) 242-5040
//161,Valley Pain Consultants,Adam,Kramer,Pain Management,6780 W. Thunderbird Rd.,Ste. A105,Peoria,AZ,85381,"33.611043, -112.204988",(602) 242-5040
//161,Valley Pain Consultants,Marc,Soloman,Pain Management,6780 W. Thunderbird Rd.,Ste. A105,Peoria,AZ,85381,"33.611043, -112.204988",(602) 242-5040
//161,Valley Pain Consultants,Marc,Soloman,Pain Management,9305 W. Thomas Rd.,Ste. 500,Phoenix,AZ,85037,"33.480381, -112.258962",(602) 242-5040
//162,HonorHealth Medical Group - Paradise Valley,Jamie,Beckman,Family Medicine,5010 E. Shea Blvd.,Ste. D100,Scottsdale,AZ,85254,"33.583331, -111.973008",(480) 882-7420
//162,HonorHealth Medical Group - Paradise Valley,Gary,Kiefer,Family Medicine,5010 E. Shea Blvd.,Ste. D100,Scottsdale,AZ,85254,"33.583331, -111.973008",(480) 882-7420
//162,HonorHealth Medical Group - Paradise Valley,Jeffrey,Leitner,Family Medicine,5010 E. Shea Blvd.,Ste. D100,Scottsdale,AZ,85254,"33.583331, -111.973008",(480) 882-7420
//163,HonorHealth Medical Group - East Tempe,Christopher,Finlay,Family Medicine,1845 E. Broadway Rd.,Ste. 116,Tempe,AZ,85282,"33.406601, -111.90752",(480) 882-7380
//163,HonorHealth Medical Group - East Tempe,Robert,Milam,Family Medicine,1845 E. Broadway Rd.,Ste. 116,Tempe,AZ,85282,"33.406601, -111.90752",(480) 882-7380
//166,Scottsdale Sports Medicine Institute ,David,Carfagno,"Internal Medicine, Sports Medicine",10133 N. 92nd St.,Ste. 102,Scottsdale,AZ,85258,"33.578206, -111.879508",(480) 664-4615
//168,Arizona Neurological Institute,As'ad,Ehtisham,Neurology,10474 W. Thunderbird Blvd.,Ste. 200,Sun City,AZ,85351,"33.605566, -112.283898",(623) 972-3800
//169,North Scottsdale Women's Health,Patricia,Grade,OB/GYN,9745 N. 90th Pl.,,Scottsdale,AZ,85258,"33.573707, -111.885031",(480) 661-1485
//169,North Scottsdale Women's Health,Jennifer,Simone,OB/GYN,9745 N. 90th Pl.,,Scottsdale,AZ,85258,"33.573707, -111.885031",(480) 661-1485
//169,North Scottsdale Women's Health,Tiffany,Stadnick,OB/GYN,9745 N. 90th Pl.,,Scottsdale,AZ,85258,"33.573707, -111.885031",(480) 661-1485
//170,Pinnacle Internal Medicine and Headache Care,Christine,Harter,Internal Medicine,2915 W. Rose Garden Ln.,Ste. 102,Phoenix,AZ,85027,"33.676185, -112.12054",(623) 748-8300
//171,Cardiovascular Institute of Scottsdale ,Karen,Stark,Cardiology,10117 N. 92nd St.,Ste. 103,Scottsdale,AZ,85258,"33.578213, -111.880156",(480) 747-6532
//174,The Heart Clinic ,Ramy,Doss,Cardiology,10293 N. 92nd St.,,Scottsdale,AZ,85258,"33.579001, -111.879439",(480) 747-6535
//174,The Heart Clinic ,Imad,Khaled,Cardiology,10293 N. 92nd St.,,Scottsdale,AZ,85258,"33.579001, -111.879439",(480) 747-6535
//174,The Heart Clinic ,Ramy,Doss,Cardiology,36889 N. Tom Darlington Dr.,,Carefree,AZ,85377,"33.820857, -111.924164",(480) 488-9220
//176,HonorHealth Medical Group - Osborn,Denis,Frank,Internal Medicine,7301 E. 2nd St.,Ste. 300,Scottsdale,AZ,85251,"33.491053, -111.924134",(480) 882-7300
//176,HonorHealth Medical Group - Osborn,Kim,Olson Gibbs,Family Medicine,7301 E. 2nd St.,Ste. 300,Scottsdale,AZ,85251,"33.491053, -111.924134",(480) 882-7300
//176,HonorHealth Medical Group - Osborn,Abby,Roberts,Internal Medicine,7301 E. 2nd St.,Ste. 300,Scottsdale,AZ,85251,"33.491053, -111.924134",(480) 882-7300
//176,HonorHealth Medical Group - Osborn,Nicole,Thrift,Family Medicine,7301 E. 2nd St.,Ste. 300,Scottsdale,AZ,85251,"33.491053, -111.924134",(480) 882-7300
//177,Arizona Pain Specialists,Paul,Lynch,Pain Management,20940 N. Tatum Blvd.,Ste. B210,Phoenix,AZ,85050,"33.675675, -111.979357",(480) 563-6400
//177,Arizona Pain Specialists,Tory,McJunkin,Pain Management,20940 N. Tatum Blvd.,Ste. B210,Phoenix,AZ,85050,"33.675675, -111.979357",(480) 563-6400
//177,Arizona Pain Specialists,Paul,Lynch,Pain Management,9787 N. 91st St.,Ste. 101,Scottsdale,AZ,85258,"33.574628, -111.882489",(480) 563-6400
//177,Arizona Pain Specialists,Tory,McJunkin,Pain Management,9787 N. 91st St.,Ste. 101,Scottsdale,AZ,85258,"33.574628, -111.882489",(480) 563-6400
//178,HonorHealth Medical Group - Shea,Melinda,Atienza,Internal Medicine,10301 N. 92nd St.,Ste. B-201,Scottsdale,AZ,85258,"33.579540, -111.881264",(480) 882-7410
//178,HonorHealth Medical Group - Shea,Renee,Gazda,Family Medicine,10301 N. 92nd St.,Ste. B-201,Scottsdale,AZ,85258,"33.579540, -111.881264",(480) 882-7410
//178,HonorHealth Medical Group - Shea,Steven,Lugo,Family Medicine,10301 N. 92nd St.,Ste. B-201,Scottsdale,AZ,85258,"33.579540, -111.881264",(480) 882-7410
//178,HonorHealth Medical Group - Shea,Madonna,Mallari,Internal Medicine,10301 N. 92nd St.,Ste. B-201,Scottsdale,AZ,85258,"33.579540, -111.881264",(480) 882-7410
//178,HonorHealth Medical Group - Shea,Rubina,Raja,Internal Medicine,10301 N. 92nd St.,Ste. B-201,Scottsdale,AZ,85258,"33.579540, -111.881264",(480) 882-7410
//178,HonorHealth Medical Group - Shea,Paul,Sieckmann,Family Medicine,10301 N. 92nd St.,Ste. B-201,Scottsdale,AZ,85258,"33.579540, -111.881264",(480) 882-7410
//178,HonorHealth Medical Group - Shea,Alvin,Wong,Internal Medicine,10301 N. 92nd St.,Ste. B-201,Scottsdale,AZ,85258,"33.579540, -111.881264",(480) 882-7410
//178,HonorHealth Medical Group - Shea,Rubina,Raja,Internal Medicine,5111 N. Scottsdale Rd.,,Scottsdale,AZ,85250,"33.511809, -111.924936",(480)882-7330
//180,Cardiovascular Institute of Scottsdale ,Bernard,Villegas,Cardiology,10117 N. 92nd St.,,Scottsdale,AZ,85258,"33.578213, -111.880156",(480) 747-6532
//181,Center for Pain and Supportive Care,Ann Cheri,Fox,Pain Management,4611 E. Shea Blvd.,Bldg. 3 Ste. 170,Phoenix,AZ,85028,"33.582361, -111.981867",(480) 889-0180
//181,Center for Pain and Supportive Care,Lisa,Stearns,Pain Management,4611 E. Shea Blvd.,Bldg. 3 Ste. 170,Phoenix,AZ,85028,"33.582361, -111.981867",(480) 889-0180
//182,HonorHealth Gastroenterology - Osborn,Jay,Mellen,Gastroenterology,10250 N. 92nd St.,Ste. 210,Scottsdale,AZ,85258,"33.580472, -111.882766",(480) 424-7228
//182,HonorHealth Gastroenterology - Osborn,Leon,Rigberg,Gastroenterology,10250 N. 92nd St.,Ste. 210,Scottsdale,AZ,85258,"33.580472, -111.882766",(480) 424-7228
//182,HonorHealth Gastroenterology - Osborn,Akshay,Shah,Gastroenterology,10250 N. 92nd St.,Ste. 210,Scottsdale,AZ,85258,"33.580472, -111.882766",(480) 424-7228
//182,HonorHealth Gastroenterology - Osborn,Amar,Thosani,Gastroenterology,10250 N. 92nd St.,Ste. 210,Scottsdale,AZ,85258,"33.580472, -111.882766",(480) 424-7228
//182,HonorHealth Gastroenterology - Osborn,Jay,Mellen,Gastroenterology,3501 N. Scottsdale Rd.,Ste. 320,Scottsdale,AZ,85251,"33.488980, -111.925842",(480) 882-5740
//182,HonorHealth Gastroenterology - Osborn,Leon,Rigberg,Gastroenterology,3501 N. Scottsdale Rd.,Ste. 320,Scottsdale,AZ,85251,"33.488980, -111.925842",(480) 882-5740
//182,HonorHealth Gastroenterology - Osborn,Akshay,Shah,Gastroenterology,3501 N. Scottsdale Rd.,Ste. 320,Scottsdale,AZ,85251,"33.488980, -111.925842",(480) 882-5740
//182,HonorHealth Gastroenterology - Osborn,Amar,Thosani,Gastroenterology,3501 N. Scottsdale Rd.,Ste. 320,Scottsdale,AZ,85251,"33.488980, -111.925842",(480) 882-5740
//183,"Peter J Ferrara, MD ",Peter,Ferrara,"General Surgery, Surgical Oncology",3604 N. Wells Fargo,Ste. L,Scottsdale,AZ,85251,"33.489814, -111.923555",(480) 947-7401
//184,"Elena Sibley, MD",Elena,Sibley,"Breast Surgery, General Surgery",3604 N. Wells Fargo,Ste. L,Scottsdale,AZ,85251,"33.489814, -111.923555",(480) 947-7401
//185,Valley ENT,Don,Burgio,"Ear, Nose & Throat",18700 N. 64th Dr.,Ste. 201,Glendale,AZ,85308,"33.655188, -112.200528",(623) 566-4718
//185,Valley ENT,Timothy,Kelsch,"Ear, Nose & Throat",20201 N. Scottsdale Healthcare Dr.,Ste. 230,Scottsdale,AZ,85255,"33.671015, -111.920379",(480) 513-0336
//185,Valley ENT,Shepherd,Pryor,"Ear, Nose & Throat",20201 N. Scottsdale Healthcare Dr.,Ste. 230,Scottsdale,AZ,85255,"33.671015, -111.920379",(480) 513-0336
//185,Valley ENT,Jordan,Weiner,"Ear, Nose & Throat",20201 N. Scottsdale Healthcare Dr.,Ste. 230,Scottsdale,AZ,85255,"33.671015, -111.920379",(480) 513-0336
//185,Valley ENT,Daniel,Hurley,"Ear, Nose & Throat",2058 S. Dobson Rd.,Ste. 10,Mesa,AZ,85202,"33.377017, -111.879335",(480) 614-0499
//185,Valley ENT,Timothy,Kelsch,"Ear, Nose & Throat",3501 N. Scottsdale Rd.,Ste. 160,Scottsdale,AZ,85251,"33.488980, -111.925842",(480) 273-8448
//185,Valley ENT,Shepherd,Pryor,"Ear, Nose & Throat",8952 E. Desert Cove Ave.,Ste. 205,Scottsdale,AZ,85260,"33.585601, -111.888393",(480) 273-8688
//185,Valley ENT,Jordan,Weiner,"Ear, Nose & Throat",8952 E. Desert Cove Ave.,Ste. 205,Scottsdale,AZ,85260,"33.585601, -111.888393",(480) 273-8688
//185,Valley ENT,Don,Burgio,"Ear, Nose & Throat",9097 E. Desert Cove Ave.,Ste. 260,Scottsdale,AZ,85260,"33.585610, -111.884972",(480) 614-0499
//185,Valley ENT,Daniel,Hurley,"Ear, Nose & Throat",9097 E. Desert Cove Ave.,Ste. 260,Scottsdale,AZ,85260,"33.585610, -111.884972",(480) 614-0499
//186,"Allergy, Ear, Nose, and Throat Center",Brian,Lee,"Ear, Nose & Throat",7245 E. Osborn Rd.,Ste. 1,Scottsdale,AZ,85251,"33.487359, -111.925068",(480) 994-0308
//186,"Allergy, Ear, Nose, and Throat Center",Brian,Lee,"Ear, Nose & Throat",7245 E. Osborn Rd.,Ste. 1,Scottsdale,AZ,85251,"33.487359, -111.925068",(480) 994-0308
//187,The Pediatric Endocrine and Diabetes Clinic,Mahmoud,Kabbani,Pediatric Endocrinology,333 W. Thomas Rd.,Ste. 201,Phoenix,AZ,85013,"33.480032, -112.078948",(602) 277-1117
//187,The Pediatric Endocrine and Diabetes Clinic,Mahmoud,Kabbani,Pediatric Endocrinology,7010 E. Chauncey Ln.,Ste. 210,Phoenix,AZ,85054,"33.651859, -111.929696",(602) 277-1117
//187,The Pediatric Endocrine and Diabetes Clinic,Mahmoud,Kabbani,Pediatric Endocrinology,9250 W. Thomas Rd.,Ste. 150,Phoenix,AZ,85037,"33.480381, -112.258962",(602) 277-1117
//189,Valley Integrated Pain,Steven,Eisenfeld,Pain Management,3501 N. Scottsdale Rd.,Ste. 221,Scottsdale,AZ,85251,"33.488980, -111.925842",(480) 422-8510
//189,Valley Integrated Pain,Steven,Eisenfeld,Pain Management,9977 N. 90th St.,Ste. 240,Scottsdale,AZ,85258,"33.575564, -111.885325",(480) 422-8510
//190,Arizona Prostate Cancer Center,Thomas,Canty,Radiation-Oncology,11000 N. Scottsdale Rd.,Ste. 120,Scottsdale,AZ,85254,"33.586935, -111.926737",(480) 455-3000
//191,OrthoArizona Phoenix Orthopedic Consultants,Marc,Rosen,Orthopedic Surgeon,18699 N. 67th Ave.,Ste. 120,Glendale,AZ,85308,"33.654618, -112.202239",(602) 398-8888
//191,OrthoArizona Phoenix Orthopedic Consultants,Marc,Rosen,Orthopedic Surgeon,19636 N. 27th Ave.,Ste. 401,Phoenix,AZ,85308,"33.664785, -112.1179",(602) 398-8888
//191,OrthoArizona Phoenix Orthopedic Consultants,Shane,Martin,Orthopedic Surgeon,20401 N. 73rd St.,Ste. 255,Scottsdale,AZ,85255,"33.673000, -111.923678",(602) 298-8888
//191,OrthoArizona Phoenix Orthopedic Consultants,Marc,Rosen,Orthopedic Surgeon,5620 E. Bell Rd.,,Scottsdale,AZ,85254,"33.640810, -111.959278",(602) 493-9361
//192,Arizona Center for Pain Relief,Julian,Grove,Pain Management,20950 N. Tatum Blvd.,Ste. 300,Phoenix,AZ,85050,"33.676190, -111.978363",(480) 222-7246
//192,Arizona Center for Pain Relief,Peter,Kubitz,"Pain Management, Physical Medicine and Rehab",20950 N. Tatum Blvd.,Ste. 300,Phoenix,AZ,85050,"33.676190, -111.978363",(480) 222-7246
//192,Arizona Center for Pain Relief,Mark,Rubin,Pain Management,20950 N. Tatum Blvd.,Ste. 300,Phoenix,AZ,85050,"33.676190, -111.978363",(480) 222-7246
//193,Affiliated Dermatology,Jason,Barr,Dermatology,13995 W. Statler Blvd.,Ste. 150,Surprise,AZ,85374,"33.628709, -112.361368",(480) 556-0446
//193,Affiliated Dermatology,Richard,Averitte,Dermatology,19646 N. 27th Ave.,Ste. 305,Phoenix,AZ,85027,"33.664785, -112.1179",(480) 556-0446
//193,Affiliated Dermatology,Richard,Averitte,Dermatology,20401 N. 73rd St.,Ste. 230,Scottsdale,AZ,85255,"33.673000, -111.923678",(480) 556-0446
//193,Affiliated Dermatology,Jason,Barr,Dermatology,20401 N. 73rd St.,Ste. 230,Scottsdale,AZ,85255,"33.673000, -111.923678",(480) 556-0446
//193,Affiliated Dermatology,Christine,Lin,Dermatology,20401 N. 73rd St.,Ste. 230,Scottsdale,AZ,85255,"33.673000, -111.923678",(480) 556-0446
//193,Affiliated Dermatology,Richard,Averitte,Dermatology,41810 N. Venture Dr.,Ste. D136,Anthem,AZ,85086,"33.864114, -112.142402",(480) 556-0446
//193,Affiliated Dermatology,Jason,Barr,Dermatology,41810 N. Venture Dr.,Ste. D136,Anthem,AZ,85086,"33.864114, -112.142402",(480) 556-0446
//193,Affiliated Dermatology,Christine,Lin,Dermatology,41810 N. Venture Dr.,Ste. D136,Anthem,AZ,85086,"33.864114, -112.142402",(480) 556-0446
//195,Spine Institute of Arizona,Edward,Dohring,Ortho - Spine,16515 S. 40th St.,Ste. 119,Phoenix,AZ,85048,"33.297206, -111.996167",(602) 953-9500
//195,Spine Institute of Arizona,Mark,Wang,Ortho - Spine,16515 S. 40th St.,Ste. 119,Phoenix,AZ,85048,"33.297206, -111.996167",(602) 953-9500
//195,Spine Institute of Arizona,Edward,Dohring,Ortho - Spine,18700 N. 64th Dr.,Ste. 202,Glendale,AZ,85308,"33.655188, -112.200528",(602) 952-9500
//195,Spine Institute of Arizona,Paul,Gause,Ortho - Spine,18700 N. 64th Dr.,Ste. 202,Glendale,AZ,85308,"33.655188, -112.200528",(602) 952-9500
//195,Spine Institute of Arizona,Mark,Wang,Ortho - Spine,18700 N. 64th Dr.,Ste. 202,Glendale,AZ,85308,"33.655188, -112.200528",(602) 952-9500
//195,Spine Institute of Arizona,Paul,Gause,Ortho - Spine,3483 S. Mercy Rd.,Ste. 102,Gilbert,AZ,85297,"33.286032, -111.74939",(602) 953-9500
//195,Spine Institute of Arizona,Edward,Dohring,Ortho - Spine,9735 N. 90th Pl.,,Scottsdale,AZ,85258,"33.573290, -111.88601",(602) 953-9500
//195,Spine Institute of Arizona,Paul,Gause,Ortho - Spine,9735 N. 90th Pl.,,Scottsdale,AZ,85258,"33.573290, -111.88601",(602) 953-9500
//195,Spine Institute of Arizona,Mark,Wang,Ortho - Spine,9735 N. 90th Pl.,,Scottsdale,AZ,85258,"33.573290, -111.88601",(602) 953-9500
//196,Desert Institute for Spine Care,Nima,Salari,Ortho - Spine,1635 E. Myrtle Ave,Ste. 400,Phoenix,AZ,85020,"33.541598, -112.045951",(602) 944-2900
//196,Desert Institute for Spine Care,Nima,Salari,Ortho - Spine,3487 S. Mercy Rd.,,Gilbert,AZ,85297,"33.286336, -111.749555",(602) 944-2900
//196,Desert Institute for Spine Care,Nima,Salari,Ortho - Spine,8630 E. Via De Ventura,Ste. 210,Scottsdale,AZ,85258,"33.554202, -111.895889",(602) 944-2900
//198,Oasis Plastic Surgery,Jennifer,Geoghegan,Plastic Surgery,9590 E. Ironwood Square Dr.,Ste. 108,Scottsdale,AZ,85258,"33.578467, -111.876259",(480) 264-6428
//199,"Steven H. Turkeltaub, MD",Steven,Turkeltaub,Plastic Surgery,10290 N. 92nd St.,Ste. 207,Scottsdale,AZ,85258,"33.580242, -111.883792",(480) 451-3000
//200,Richard J Brown MD,Richard,Brown,Plastic Surgery,11000 N. Scottsdale Rd.,Ste. 130,Scottsdale,AZ,85254,"33.586935, -111.926737",(480) 947-2455
//201,McDowell Mountain Gynecology,Rachel,Spieldoch,Gynecology,5620 E. Bell Rd.,,Scottsdale,AZ,85254,"33.640810, -111.959278",(602) 493-9361
//202,OrthoArizona Center for Spinal Disorders,William,Stevens,Ortho - Spine,3133 E. Camelback Rd.,Ste. 245,Scottsdale,AZ,85016,"33.502165, -111.938995",(602) 253-7000
//203,Desert Springs Cancer Care,Andrew,Buresh,Hematology-Oncology,16838 E. Palisades Blvd.,Ste. C-153,Fountain Hills,AZ,85268,"33.607965, -111.716663",(480) 585-4673
//203,Desert Springs Cancer Care,Andrew,Buresh,Hematology-Oncology,21803 N. Scottsdale Rd.,Ste. 110,Scottsdale,AZ,85255,"33.671711, -111.923336",(480) 585-4673
//203,Desert Springs Cancer Care,Brendan,Curley,Medical Oncology,21803 N. Scottsdale Rd.,Ste. 110,Scottsdale,AZ,85255,"33.671711, -111.923336",(480) 585-4673
//204,Care MD ,Katayoun,Baniriah,Family Medicine,2899 N. 87th St.,Ste. 110,Scottsdale,AZ,85257,"33.480098, -111.892157",(480) 699-7004
//204,Care MD ,Vafa,Matin,Family Medicine,2899 N. 87th St.,Ste. 110,Scottsdale,AZ,85257,"33.480098, -111.892157",(480) 699-7004
//204,Care MD ,Katayoun,Baniriah,Family Medicine,2899 N. 87th St. ,Ste. 110,Scottsdale,AZ,85257,"33.480098, -111.892157",(480) 699-7004
//204,Care MD ,Vafa,Matin,Family Medicine,2899 N. 87th St. ,Ste. 110,Scottsdale,AZ,85257,"33.480098, -111.892157",(480) 699-7004
//204,Care MD ,Katayoun,Baniriah,Family Medicine,4845 E. Thunderbird Rd.,Ste. 1,Scottsdale,AZ,85254,"33.611092, -111.975544",(480) 699-7004
//204,Care MD ,Vafa,Matin,Family Medicine,4845 E. Thunderbird Rd.,Ste. 1,Scottsdale,AZ,85254,"33.611092, -111.975544",(480) 699-7004
//204,Care MD ,Katayoun,Baniriah,Family Medicine,4845 E. Thunderbird Rd.,Ste. 1,Scottsdale,AZ,85254,"33.611092, -111.975544",(480) 699-6129
//204,Care MD ,Vafa,Matin,Family Medicine,4845 E. Thunderbird Rd.,Ste. 1,Scottsdale,AZ,85254,"33.611092, -111.975544",(480) 699-6129
//209,Berardi Aesthetics and Plastic Surgery,Joseph,Berardi,Plastic Surgery,11000 N. Scottsdale Rd.,Ste. 100,Scottsdale,AZ,85254,"33.586935, -111.926737",(480) 502-4567
//210,HonorHealth Medical Group - McKellips,Dean,Faust,Family Medicine,1124 E. McKellips Rd.,Ste. 110,Mesa,AZ,85203,"33.452065, -111.806418",(480) 882-7370
//210,HonorHealth Medical Group - McKellips,Clifford,Gazda,Family Medicine,1124 E. McKellips Rd.,Ste. 110,Mesa,AZ,85203,"33.452065, -111.806418",(480) 882-7370
//210,HonorHealth Medical Group - McKellips,Nathan,Matthews,Family Medicine,1124 E. McKellips Rd.,Ste. 110,Mesa,AZ,85203,"33.452065, -111.806418",(480) 882-7370
//210,HonorHealth Medical Group - McKellips,Elizabeth,Smith,Family Medicine,1124 E. McKellips Rd.,Ste. 110,Mesa,AZ,85203,"33.452065, -111.806418",(480) 882-7370
//212,DC Ranch Family Medicine,Arneyo,Perez,Family Medicine,20945 N. Pima Rd.,Ste. 110,Scottsdale,AZ,85255,"33.676137, -111.888807",(480) 800-3550
//213,Desert Kidney Associates,Sridhar,Nair,Nephrology,11000 N. Scottsdale Rd.,Ste. 195,Scottsdale,AZ,85254,"33.586935, -111.926737",(480) 834-9039
//213,Desert Kidney Associates,Sridhar,Nair,Nephrology,3511 S. Mercy Rd.,Ste. 102,Gilbert,AZ,85296,"33.285531, -111.750045",(480) 834-9039
//213,Desert Kidney Associates,Kanwardeep,Sachdeva,Nephrology,3511 S. Mercy Rd.,Ste. 102,Gilbert,AZ,85296,"33.285531, -111.750045",(480) 834-9039
//213,Desert Kidney Associates,Mandeep,Sahani,Nephrology,3511 S. Mercy Rd.,Ste. 102,Gilbert,AZ,85296,"33.285531, -111.750045",(480) 834-9039
//213,Desert Kidney Associates,Vikas,Kalra,Nephrology,612 W. Baseline Rd.,,Mesa,AZ,85210,"33.379139, -111.844853",(480) 834-9039
//213,Desert Kidney Associates,Thaddeo,Oconer,Nephrology,612 W. Baseline Rd.,,Mesa,AZ,85210,"33.379139, -111.844853",(480) 834-9039
//213,Desert Kidney Associates,Kanwardeep,Sachdeva,Nephrology,612 W. Baseline Rd.,,Mesa,AZ,85210,"33.379139, -111.844853",(480) 834-9039
//213,Desert Kidney Associates,Mandeep,Sahani,Nephrology,612 W. Baseline Rd.,,Mesa,AZ,85210,"33.379139, -111.844853",(480) 834-9039
//213,Desert Kidney Associates,Vikas,Kalra,Nephrology,9953 N. 95th St.,Ste. 105,Scottsdale,AZ,85258,"33.577216, -111.875814",(480) 834-9039
//213,Desert Kidney Associates,Sridhar,Nair,Nephrology,9953 N. 95th St.,Ste. 105,Scottsdale,AZ,85258,"33.577216, -111.875814",(480) 834-9039
//214,North Valley Neurology and Sleep,Jeffrey,Gitt,Neurology,16222 N. 159th Ave,Ste. A100,Glendale,AZ,85306,"33.616262, -112.402565",(602) 482-2116
//214,North Valley Neurology and Sleep,Jeffrey,Gitt,Neurology,3815 E. Bell Rd.,Ste. 2400,Phoenix,AZ,85032,"33.640261, -111.999902",(602) 482-2116
//215,Scottsdale Gastroenterology Associates,Janet,Reiser,Gastroenterology,3301 N. Miller Rd.,Ste. 138,Scottsdale,AZ,85251,"33.486379, -111.917111",(480) 646-8444
//216,Geoffrey H. Cook MD,Geoffrey,Cook,Orthopedic Surgeon,10250 N. 92nd St.,Ste. 206,Scottsdale,AZ,85258,"33.580472, -111.882766",(480) 656-4370
//216,Geoffrey H. Cook MD,Geoffrey,Cook,Orthopedic Surgeon,75 Tortilla Dr.,,Sedona,AZ,86336,"34.863221, -111.811426",(928) 282-1522
//217,Phoenix Eye Group,Eva Marie,Chong,Ophthalmology,10250 N. 92nd St.,Ste. 105,Scottsdale,AZ,85260,"33.580472, -111.882766",(602) 888-4466
//219,Valley Urologic Associates,Shawn,Blick,Urology,13555 W. McDowell Rd.,Ste. 304,Goodyear,AZ,85395,"33.463903, -112.351015",(623) 935-5522
//219,Valley Urologic Associates,Lipika,McCauley,Urology,183699 N. 67th Ave.,Ste. 230,Glendale,AZ,85308,"33.658567, -112.203054",(623) 935-5522
//219,Valley Urologic Associates,Shawn,Blick,Urology,3815 E. Bell Rd.,Ste. 3600,Phoenix,AZ,85032,"33.640261, -111.999902",(623) 935-5522
//219,Valley Urologic Associates,Lipika,McCauley,Urology,3815 E. Bell Rd.,Ste. 3600,Phoenix,AZ,85032,"33.640261, -111.999902",(623) 935-5522
//220,Pulmonary Clinics of Scottsdale,Aamir,Awan,Pulmonary-Critical Care,10250 N. 92nd St.,Ste. 300,Scottsdale,AZ,85258,"33.580472, -111.882766",(480) 970-9649
//220,Pulmonary Clinics of Scottsdale,Irfan,Khalid,Pulmonary-Critical Care,10250 N. 92nd St.,Ste. 300,Scottsdale,AZ,85258,"33.580472, -111.882766",(480) 970-9649
//220,Pulmonary Clinics of Scottsdale,Kimberly,Parker,Pulmonary-Critical Care,10250 N. 92nd St.,Ste. 300,Scottsdale,AZ,85258,"33.580472, -111.882766",(480) 970-9649
//221,American Advanced Surgery,Babak,Rashidi,General Surgery,3501 N. Scottsdale Rd.,Ste. 140,Scottsdale,AZ,85251,"33.488980, -111.925842",(480) 513-2727
//223,Arizona Transplant Associates,Jeffrey,Brink,Transplant Surgery,2218 N. 3rd St.,,Phoenix,AZ,85004,"33.471877, -112.069929",(602) 252-2543
//224,Valley Urogynecology Associates,Shazia,Malik,Urogynecology,1616 E. Maryland Ave.,,Phoenix,AZ,85016,"33.531244, -112.046644",(602) 788-1521
//224,Valley Urogynecology Associates,Paul,Marshburn,Urogynecology,1616 E. Maryland Ave.,,Phoenix,AZ,85016,"33.531244, -112.046644",(602) 788-1521
//224,Valley Urogynecology Associates,Felipe,Videla,Urogynecology,1616 E. Maryland Ave.,,Phoenix,AZ,85016,"33.531244, -112.046644",(602) 788-1521
//225,"Bertrand P Kaper, MD ",Bertrand,Kaper,Orthopedic Surgeon,20401 N. 73rd St.,Ste. 275,Scottsdale,AZ,85255,"33.673000, -111.923678",(480) 305-0034
//225,"Bertrand P Kaper, MD ",Bertrand,Kaper,Orthopedic Surgeon,3655 Crossings Dr.,,Prescott,AZ,86305,"34.596629, -112.467088",(928) 778-9250
//226,Center for Dermatology,Clay,Forsberg,Plastic Surgery,14275 N. 87th St.,Ste. 110,Scottsdale,AZ,85260,"33.615368, -111.892415",(480) 905-8485
//226,Center for Dermatology,Gary,McCracken,Dermatology,14275 N. 87th St.,Ste. 110,Scottsdale,AZ,85260,"33.615368, -111.892415",(480) 905-8485
//226,Center for Dermatology,Anthony,Nuara,Dermatology,14275 N. 87th St.,Ste. 110,Scottsdale,AZ,85260,"33.615368, -111.892415",(480) 905-8485
//226,Center for Dermatology,James,Young,Dermatology,14275 N. 87th St.,Ste. 110,Scottsdale,AZ,85260,"33.615368, -111.892415",(480) 905-8485
//226,Center for Dermatology,Gary,McCracken,Dermatology,16838 E. Palisades Blvd.,Ste. B124,Fountain Hills,AZ,85268,"33.607965, -111.716663",(480) 905-8485
//226,Center for Dermatology,James,Young,Dermatology,25229 S. Sun Lakes Blvd.,Ste. 202,Sun Lakes,AZ,85248,"33.217402, -111.884027",(480) 905-8485
//226,Center for Dermatology,James,Young,Dermatology,740 E. Highland Ave,Ste. 100,Phoenix,AZ,85014,"33.505987, -112.063376",(480) 905-8485
//226,Center for Dermatology,Clay,Forsberg,Plastic Surgery,740 E. Highland Ave.,Ste. 100,Phoenix,AZ,85014,"33.505987, -112.063376",(480) 905-8485
//227,Arizona Ocular and Facial Plastic Surgery,Dustin,Heringer,Plastic Surgery,3501 N. Scottsdale Rd.,Ste. 326,Scottsdale,AZ,85251,"33.488980, -111.925842",(480) 949-5980
//228,Digestive Health Specialist - Arizona,Bradford,Jones,Gastroenterology,8573 E. Princess Dr.,Ste. 215,Scottsdale,AZ,85255,"33.645452, -111.894324",(480) 563-5757
//228,Digestive Health Specialist - Arizona,Suzanne,Skoog,Gastroenterology,8573 E. Princess Dr.,Ste. 215,Scottsdale,AZ,85255,"33.645452, -111.894324",(480) 563-5757
//228,Digestive Health Specialist - Arizona,Norman,Zitomer,Gastroenterology,8573 E. Princess Dr.,Ste. 215,Scottsdale,AZ,85255,"33.645452, -111.894324",(480) 563-5757
//229,Gawley Plastic Surgery M.D,Bryan,Gawley,Plastic Surgery,8913 E. Bell Rd.,Ste. 101B,Scottsdale,AZ,85260,"33.639120, -111.887814",(480) 860-2173
//230,"Gordon Grado, MD",Gordon,Grado,Radiation-Oncology,2926 N. Civic Center Plaza,,Scottsdale,AZ,85251,"33.481317, -111.922439",(480) 614-6300
//231,Desert Orthopedic Specialists,Jonathan,Fox,Orthopedic Surgeon,2905 W. Warner Rd. ,Ste. 23,Chandler,AZ,85224,"33.333922, -111.891294",(480) 345-2031
//233,"Keith Zacher, MD",Keith,Zacher,General Surgery,3501 N. Scottsdale Rd.,Ste. 140,Scottsdale,AZ,85251,"33.488980, -111.925842",(480) 772-2453
//236,HonorHealth Corporate Health - Osborn,Kurt,Zangerle,Occupational Health,3501 N. Scottsdale Rd.,Ste. 231,Scottsdale,AZ,85251,"33.488980, -111.925842",(480) 882-4770
//237,Evangelista Orthopedic Clinic,Gregory,Evangelista,Orthopedic Surgeon,7301 E. 2nd St.,Ste. 102,Scottsdale,AZ,85251,"33.491053, -111.924134",(480) 994-1149
//244,Allergy & Environmental Treatment Center,Lawrence,Liszewski,Family Medicine,8952 E. Desert Cove Dr.,Ste. 114,Scottsdale,AZ,85260,"33.585601, -111.888393",(480) 634-9285
//245,"Deborah D. Wilson, MD",Thomas,Waliser,Gynecology,10250 N. 92nd St.,Ste. 102,Scottsdale,AZ,85258,"33.580472, -111.882766",(480)860-4791
//245,"Deborah D. Wilson, MD",Deborah,Wilson,OB/GYN,10250 N. 92nd St.,Ste. 102,Scottsdale,AZ,85258,"33.580472, -111.882766",(480)860-4791
//246,HonorHealth Medical Group - West Tempe,Kristen,Thomsen,Family Medicine,1626 S. Priest Dr.,Ste. 104,Tempe,AZ,85281,"33.410924, -111.961205",(480) 882-7320
//247,HonorHealth Medical Group - Mescal,Robert,Creager,Family Medicine,10900 N. Scottsdale Rd.,Ste. 603,Scottsdale,AZ,85254,"33.586582, -111.926704",(480)882-7470
//247,HonorHealth Medical Group - Mescal,Alan,Mallace,Rheumatology,10900 N. Scottsdale Rd.,Ste. 603,Scottsdale,AZ,85254,"33.586582, -111.926704",(480)882-7470
//247,HonorHealth Medical Group - Mescal,Jose,Reynoso,Family Medicine,10900 N. Scottsdale Rd.,Ste. 603,Scottsdale,AZ,85254,"33.586582, -111.926704",(480)882-7470
//247,HonorHealth Medical Group - Mescal,Hollis,Underwood,Internal Medicine,10900 N. Scottsdale Rd.,Ste. 603,Scottsdale,AZ,85254,"33.586582, -111.926704",(480)882-7470
//248,HonorHealth Medical Group - Chaparral,Rubina,Raja,Internal Medicine,10301 N. 92nd St.,Ste. B-201,Scottsdale,AZ,85258,"33.579540, -111.881264",(480) 882-7410
//248,HonorHealth Medical Group - Chaparral,Gary,Craine,Internal Medicine,5111 N. Scottsdale Rd.,,Scottsdale,AZ,85250,"33.511809, -111.924936",(480)882-7330
//248,HonorHealth Medical Group - Chaparral,Randy,Gelow,Family Medicine,5111 N. Scottsdale Rd.,,Scottsdale,AZ,85250,"33.511809, -111.924936",(480)882-7330
//248,HonorHealth Medical Group - Chaparral,Rubina,Raja,Internal Medicine,5111 N. Scottsdale Rd.,,Scottsdale,AZ,85250,"33.511809, -111.924936",(480)882-7330
//248,HonorHealth Medical Group - Chaparral,William,Redenius,Internal Medicine,5111 N. Scottsdale Rd.,,Scottsdale,AZ,85250,"33.511809, -111.924936",(480)882-7330
//250,HonorHealth Inpatient Psychiatry,William,Fulton,Psychiatry,10250 N. 92nd St.,Ste. 304,Scottsdale,AZ,85258,"33.580472, -111.882766",(480) 451-6798
//253,"Paul M. Francis, MD",Paul,Francis,Neuro Surgery,8412 E. Shea Blvd.,Ste. 100,Scottsdale,AZ,85260,"33.582463, -111.873618",(480) 614-2500
//254,"Deborah Trojanowski, MD",Deborah,Trojanowski,Plastic Surgery,10617 N. Hayden Rd.,Ste. B102,Scottsdale,AZ,85260,"33.584425, -111.906921",(480) 481-0133
//255,Integrated Orthopedics of AZ,Brian,Gruber,Orthopedic Surgeon,20940 N. Tatum Blvd.,Ste. B-290,Scottsdale,AZ,85050,"33.675675, -111.979357",(602) 734-1834
//256,Gerrit Henry D.O.,Henry,Gerrit,Dermatology,7331 E. Osborne Dr.,Ste. 250,Scottsdale,AZ,85251,"33.487638, -111.924263",(480) 947-7725
//259,Talus in Motion,Serrina,Yozsa,Podiatry,5111 N. Scottsdale Rd.,Ste. 101,Scottsdale,AZ,85251,"33.511809, -111.924936",(480) 994-3668
//261,Arizona Urology Specialists,Erik,Alexander,Urology,10301 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.579540, -111.881264",(480) 661-2662
//261,Arizona Urology Specialists,Yasmin,Bootwala,Urology,10301 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.579540, -111.881264",(480) 661-2662
//261,Arizona Urology Specialists,Gilberto,Brito,Urology,10301 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.579540, -111.881264",(480) 661-2662
//261,Arizona Urology Specialists,James,Daitch,Urology,10301 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.579540, -111.881264",(480) 661-2662
//261,Arizona Urology Specialists,Micheal,Darson,Urology,10301 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.579540, -111.881264",(480) 661-2662
//261,Arizona Urology Specialists,Farshid,Sadeghi,Urology,10301 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.579540, -111.881264",(480) 661-2662
//261,Arizona Urology Specialists,Robert,Shapiro,Urology,10301 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.579540, -111.881264",(480) 661-2662
//261,Arizona Urology Specialists,Anthony,Woodruff,Urology,10301 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.579540, -111.881264",(480) 661-2662
//261,Arizona Urology Specialists,Adrian,Feng,Urology,1313 E. Osborn Rd.,Ste. B150,Phoenix,AZ,85014,"33.487005, -112.054081",(480) 661-2662
//261,Arizona Urology Specialists,Scott,Kalinowski,Urology,1313 E. Osborn Rd.,Ste. B150,Phoenix,AZ,85014,"33.487005, -112.054081",(480) 661-2662
//261,Arizona Urology Specialists,Eric,Zeidman,Urology,1313 E. Osborn Rd.,Ste. B150,Phoenix,AZ,85014,"33.487005, -112.054081",(480) 661-2662
//261,Arizona Urology Specialists,Yasmin,Bootwala,Urology,20201 N. Scottsdale Healthcare Dr.,Ste. 280 & 290,Scottsdale,AZ,85255,"33.671015, -111.920379",(480) 661-2662
//261,Arizona Urology Specialists,Bernard,Gburek,Urology,20201 N. Scottsdale Healthcare Dr.,Ste. 280 & 290,Scottsdale,AZ,85255,"33.671015, -111.920379",(480) 661-2662
//261,Arizona Urology Specialists,Farshid,Sadeghi,Urology,20201 N. Scottsdale Healthcare Dr.,Ste. 280 & 290,Scottsdale,AZ,85255,"33.671015, -111.920379",(480) 661-2662
//261,Arizona Urology Specialists,Robert,Shapiro,Urology,20201 N. Scottsdale Healthcare Dr.,Ste. 280 & 290,Scottsdale,AZ,85255,"33.671015, -111.920379",(480) 661-2662
//262,Medcubed ,Sam,Fereidouni,Family Medicine,7699 E. Pinnacle Peak Rd.,,Scottsdale,AZ,85255,"33.694548, -111.91607",(480) 300-4663
//263,Endocrinology Diabetes & Longevity Center of Arizona,Kristina,Rudgear,Endocrinology,4045 W. Chandler Blvd.,,Chandler,AZ,85226,"33.304531, -111.911889",(480) 513-1042
//263,Endocrinology Diabetes & Longevity Center of Arizona,Kristina,Rudgear,Endocrinology,7344 E. Deer Valley Rd.,Ste. 100,Scottsdale,AZ,85255,"33.685464, -111.922329",(480) 513-1042
//264,Arizona Asthma and Allergy Institute,Levente,Erdos,Allergy,13860 N. Northsight Blvd.,,Scottsdale,AZ,85260,"33.611848, -111.897416",(480) 451-6756
//264,Arizona Asthma and Allergy Institute,Ronald,Jorgensen,Allergy,13860 N. Northsight Blvd.,,Scottsdale,AZ,85260,"33.611848, -111.897416",(480) 451-6756
//264,Arizona Asthma and Allergy Institute,Joseph,Mittel,Allergy,13860 N. Northsight Blvd.,,Scottsdale,AZ,85260,"33.611848, -111.897416",(480) 451-6756
//264,Arizona Asthma and Allergy Institute,Joseph,Mittel,Allergy,3200 E. Camelback,,Phoenix,AZ,85018,"33.510707, -112.01162",(602) 734-0370
//264,Arizona Asthma and Allergy Institute,Levente,Erdos,Allergy,4140 E. Baseline Rd.,Ste. 112,Mesa,AZ,85206,"33.379734, -111.744335",(480) 545-4000
//264,Arizona Asthma and Allergy Institute,Ronald,Jorgensen,Allergy,5605 W. Eubie Ave.,Ste. 200,Glendale,AZ,85304,"33.606721, -112.180929",(602) 843-2991
//265,Scottsdale Primary Care,Julie,Norley,Family Medicine,7543 E. 2nd St.,Ste. 101,Scottsdale,AZ,85251,"33.491456, -111.918108",(480) 607-3800
//265,Scottsdale Primary Care,Michael,Stevens,Internal Medicine,7543 E. 2nd St.,Ste. 101,Scottsdale,AZ,85251,"33.491456, -111.918108",(480) 607-3800
//265,Scottsdale Primary Care,Joseph,Zitar,Internal Medicine,7543 E. 2nd St.,Ste. 101,Scottsdale,AZ,85251,"33.491456, -111.918108",(480) 607-3800
//266,Atria Heart,Maulik,Shah,"Internal Medicine, Cardiology",16427 N. Scottsdale Rd.,,Scottsdale,AZ,85254,"33.636787, -111.923558",(480) 718-5072
//266,Atria Heart,Wesley,Tyree,"Internal Medicine, Cardiology",16427 N. Scottsdale Rd.,,Scottsdale,AZ,85254,"33.636787, -111.923558",(480) 718-5072
//267,The Insomnia and Sleep Institute of Arizona,Ruchir,Patel,Sleep Medicine,8330 E. Hartford Dr.,,Scottsdale,AZ,85255,"33.642856, -111.899696",(480) 745-3547
//268,Gynecology Today,Alexandra,Kidd,Gynecology,10210 N. 92nd St.,Ste. 201,Scottsdale,AZ,85258,"33.579266, -111.882546",(480) 291-6600
//269,Ali Ghazanfari MD ,Ali,Ghazanfari,General Surgery,333 N. Dobson Rd.,,Chandler,AZ,85224,"33.308679, -111.875587",(480) 926-3353
//269,Ali Ghazanfari MD ,Ali,Ghazanfari,General Surgery,6116 E. Arbor Ave.,Ste. 106,Mesa,AZ,85206,"33.413696, -111.698496",(480) 926-3353
//269,Ali Ghazanfari MD ,Ali,Ghazanfari,General Surgery,7534 E. 2nd St.,Ste. 101,Scottsdale,AZ,85251,"33.491456, -111.918108",(480) 926-3353
//270,Arizona Oculoplastic Specialists,Ali,Ghafouri,"Ophthalmology, Plastic Surgery",14275 N. 87th St.,Ste. 113,Scottsdale,AZ,85260,"33.615368, -111.892415",(480) 905-1010
//270,Arizona Oculoplastic Specialists,Ali,Ghafouri,"Ophthalmology, Plastic Surgery",4824 E. Baseline Rd.,Ste. 102,Mesa,AZ,85206,"33.379990, -111.72973",(480) 905-1010
//271,HonorHealth Medical Group - 92nd Street,Francisco,Pena,Family Medicine,10277 N. 92nd St.,Ste. 101,Scottsdale,AZ,85258,"33.578634, -111.879481",(480) 609-1444
	}

}