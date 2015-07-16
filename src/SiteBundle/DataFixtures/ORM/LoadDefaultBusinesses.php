<?php
/**
 * Created by Justin St. Germain
 * Date: 6/9/15
 * Time: 8:29 PM
 */

namespace SiteBundle\Bundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use SiteBundle\Entity\Practices;

class LoadDefaultBusinesses implements FixtureInterface
{

	public function load(ObjectManager $manager)
	{

		// Initiate the Practices Entity
		$practice = new Practices();
		
		$practice->setPractice("21st Century Oncology of Arizona")->setAddress1("334 E. Hatcher Road")->setCity("Phoenix")->setState("AZ")->setZip("85020")->setLatitude("33.57170")->setLongitude("-112.06798")->setPhone("(602) 944-0677");
		$manager->persist($practice);

		$practice->setPractice("21st Century Oncology of Arizona")->setAddress1("7340 E. Thomas Road")->setState("Scottsdale")->setCity("AZ")->setZip("85251")->setLatitude("33.48080")->setLongitude("-111.92263")->setPhone("(480) 945-6896");
		$manager->persist($practice);

		$practice->setPractice("4C Medical Group")->setAddress1("11000 N. Scottsdale Rd.")->setAddress2("Ste. 120")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.58693")->setLongitude("-111.92674")->setPhone("(480) 455-3000");
		$manager->persist($practice);

		$practice->setPractice("4C Medical Group")->setAddress1("4045 E Bell Road")->setAddress2("Suite 105")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.63991")->setLongitude("-111.99474")->setPhone("(602)923-6666");
		$manager->persist($practice);

		$practice = new Practices();
		$practice->setPractice("A.O.A. Paradise Valley OBGYN")->setAddress1("10261 N. 92nd St.")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57900")->setLongitude("-111.87908")->setPhone("(480) 443-4437");

		$practice = new Practices();
		$practice->setPractice("Admire Plastic Surgery")->setAddress1("7231 E. Princess Blvd")->setAddress2("Suite 211")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.64671")->setLongitude("-111.92208")->setPhone("(480) 946-3155");

		$practice = new Practices();
		$practice->setPractice("Advanced Fertility Care")->setAddress1("1550 S Alma School Rd")->setAddress2("Ste. 100")->setCity("Mesa")->setState("AZ")->setZip("85210")->setLatitude("33.38791")->setLongitude("-111.85828")->setPhone("(480) 874-2229");

		$practice = new Practices();
		$practice->setPractice("Advanced Fertility Care")->setAddress1("1701 E. Thomas Rd.")->setAddress2("Bldg 1, Ste. 202")->setCity("Phoenix")->setState("AZ")->setZip("85016")->setLatitude("33.47995");$practice->("-112.04486")->setPhone("(480) 874-2229");

		$practice = new Practices();
$practice->setPractice("Advanced Fertility Care")->setAddress1("9819 N. 95th St.")->setAddress2("Ste. 105")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57561")->setLongitude("-111.87506")->setPhone("(480) 874-2229");

		$practice = new Practices();
$practice->setPractice("Affiliated Allergy & Pulmonary Associates")->setAddress1("34597 N. 60th St.")->setCity("Scottsdale")->setState("AZ")->setZip("85266")->setLatitude("33.79867")->setLongitude("-111.95135")->setPhone("(480) 473-7800");

		$practice = new Practices();
$practice->setPractice("Affiliated Dermatology")->setAddress1("13995 W. Statler Blvd")->setAddress2("Suite 150")->setCity("Surprise")->setState("AZ")->setZip("85374")->setLatitude("33.62871");$practice->("-112.36137")->setPhone("(480) 556-0446");

		$practice = new Practices();
$practice->setPractice("Affiliated Dermatology")->setAddress1("19646 N. 27th Avenue")->setAddress2("Suite 305")->setCity("Phoenix")->setState("AZ")->setZip("85027")->setLatitude("33.66550");$practice->("-112.11826")->setPhone("(480) 556-0446");

		$practice = new Practices();
$practice->setPractice("Affiliated Dermatology")->setAddress1("20401 N. 73rd Street")->setAddress2("Suite 230")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.67300")->setLongitude("-111.92368")->setPhone("(480) 556-0446");

		$practice = new Practices();
$practice->setPractice("Affiliated Dermatology")->setAddress1("41810 N. Venture Drive")->setAddress2("Suite D136");$practice->("Anthem")->setState("AZ")->setZip("85086")->setLatitude("33.86411");$practice->("-112.14240")->setPhone("(480) 556-0446");

		$practice = new Practices();
$practice->setPractice("Affiliated Urologists")->setAddress1("20950 North Tatum Blvd")->setAddress2("Ste. 220A")->setCity("Phoenix")->setState("AZ")->setZip("85050")->setLatitude("33.67619")->setLongitude("-111.97836")->setPhone("(602) 264-0608");

		$practice = new Practices();
$practice->setPractice("Affiliated Urologists")->->setAddress1("3330 N. 2nd St.")->setAddress2("Ste. 601")->setCity("Phoenix")->setState("AZ")->setZip("85012")->setLatitude("33.48678");$practice->("-112.07169")->setPhone("(602) 264-0608");

		$practice = new Practices();
$practice->setPractice("Agave Pediatrics")->setAddress1("7010 E. Chauncey Ln.")->setAddress2("Ste. 225")->setCity("Phoenix")->setState("AZ")->setZip("85054")->setLatitude("33.65186")->setLongitude("-111.92970")->setPhone("(480) 585-5200");

		$practice = new Practices();
$practice->setPractice("Agave Pediatrics")->setAddress1("7333 East Thomas Road")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48019")->setLongitude("-111.92278")->setPhone("(480) 585-5200");

		$practice = new Practices();
$practice->setPractice("Ali Ghazanfare MD PLLC")->setAddress1("6116 E. Arbor Ave.")->setAddress2("#B106")->setCity("Mesa")->setState("AZ")->setZip("85206")->setLatitude("33.41370")->setLongitude("-111.69850")->setPhone("(480) 926-3353");

		$practice = new Practices();
$practice->setPractice("Ali Ghazanfare MD PLLC")->setAddress1("7534 E. 2nd Street")->setAddress2("Suite 101")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.49146")->setLongitude("-111.91811")->setPhone("(480) 926-3353");

		$practice = new Practices();
$practice->setPractice("Allergy & Environmental Treatment Center, LLC")->setAddress1("8952 E. Desert Cove Dr.")->setAddress2("Suite 114")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58560")->setLongitude("-111.88839")->setPhone("(480) 634-9285");

		$practice = new Practices();
$practice->setPractice("Allergy, Asthma, and Immunology Associates")->setAddress1("10200 N. 92nd St.")->setAddress2("Ste. 130")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57833")->setLongitude("-111.88141")->setPhone("(480) 614-8011");

		$practice = new Practices();
$practice->setPractice("Allergy, Asthma, and Immunology Associates")->setAddress1("3800 N. Central Ave.")->setAddress2("Ste. 404")->setCity("Phoenix")->setState("AZ")->setZip("85012")->setLatitude("33.49174");$practice->("-112.07448")->setPhone("(602) 248-9129");

		$practice = new Practices();
$practice->setPractice("Allergy, Asthma, and Immunology Associates")->setAddress1("7514 E. Monterey Way")->setAddress2("Ste. 1")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48617")->setLongitude("-111.91872")->setPhone("(480) 949-7377");

		$practice = new Practices();
$practice->setPractice("Allergy, Ear, Nose, and Throat Center Ltd.")->setAddress1("7245 East Osborn Road")->setAddress2("Suite 1")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48736")->setLongitude("-111.92507")->setPhone("(480) 994-0308");

		$practice = new Practices();
$practice->setPractice("American Advanced Surgery")->setAddress1("3501 N Scottsdale Rd")->setAddress2("Suite 140")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48898")->setLongitude("-111.92584")->setPhone("(480) 513-2727");

		$practice = new Practices();
$practice->setPractice("Arizona Arrhythmia Consultants")->setAddress1("10117 N 92nd St.")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57821")->setLongitude("-111.88016")->setPhone("(480) 246-3000");

		$practice = new Practices();
$practice->setPractice("Arizona Arrhythmia Consultants")->setAddress1("3225 N Civic Center Plaza")->setAddress2("Suite 1")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48517")->setLongitude("-111.92141")->setPhone("(480) 246-3000");

		$practice = new Practices();
$practice->setPractice("Arizona Asthma and Allergy Institute")->setAddress1("13026 W. Rancho Santa Fe Blvd.")->setAddress2("Suite A-100");$practice->("Avondale")->setState("AZ")->setZip("85392")->setLatitude("33.46235");$practice->("-112.33623")->setPhone("(623) 935-3000");

		$practice = new Practices();
$practice->setPractice("Arizona Asthma and Allergy Institute")->setAddress1("13860 N. Northsight Blvd.")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.61185")->setLongitude("-111.89742")->setPhone("(480) 451-6756");

		$practice = new Practices();
$practice->setPractice("Arizona Asthma and Allergy Institute")->setAddress1("3200 E. Camelback")->setAddress2("Suite")->setCity("Phoenix")->setState("AZ")->setZip("85018")->setLatitude("33.51071");$practice->("-112.01162")->setPhone("(602) 734-0370");

		$practice = new Practices();
$practice->setPractice("Arizona Asthma and Allergy Institute")->setAddress1("4140 E. baseline Road")->setAddress2("Suite 112")->setCity("Mesa")->setState("AZ")->setZip("85206")->setLatitude("33.37854")->setLongitude("-111.89359")->setPhone("(480) 545-4000");

		$practice = new Practices();
$practice->setPractice("Arizona Asthma and Allergy Institute")->setAddress1("5605 W. Eubie Ave.")->setAddress2("Suite 200")->setCity("Glendale")->setState("AZ")->setZip("85304")->setLatitude("33.60708");$practice->("-112.18150")->setPhone("(602) 843-2991");

		$practice = new Practices();
$practice->setPractice("Arizona Bone and Joint Specialists")->setAddress1("13640 N. 7th St.")->setCity("Phoenix")->setState("AZ")->setZip("85022")->setLatitude("33.61099");$practice->("-112.06601")->setPhone("(602) 863-2040");

		$practice = new Practices();
$practice->setPractice("Arizona Bone and Joint Specialists")->setAddress1("5620 E. Bell Rd.")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.64081")->setLongitude("-111.95928")->setPhone("(602) 493-9361");

		$practice = new Practices();
$practice->setPractice("Arizona Cardiology Group")->setAddress1("1988 E Baseline")->setAddress2("Suite 101");$practice->("Tempe")->setState("AZ")->setZip("85283")->setLatitude("33.37909")->setLongitude("-111.90104")->setPhone("(602) 386-1100");

		$practice = new Practices();
$practice->setPractice("Arizona Cardiology Group")->setAddress1("20201 N. Scottsdale Healthcare Dr.")->setAddress2("Ste. 200")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.67102")->setLongitude("-111.92038")->setPhone("(602) 386-1100");

		$practice = new Practices();
$practice->setPractice("Arizona Cardiology Group")->setAddress1("340 E Palm Lane")->setAddress2("Suite 175")->setCity("Phoenix")->setState("AZ")->setZip("85004")->setLatitude("33.46994");$practice->("-112.06835")->setPhone("(602) 368-1112");

		$practice = new Practices();
$practice->setPractice("Arizona Cardiovascular and Thoracic Surgeons")->setAddress1("13943 North 91st Ave")->setAddress2("Suite B101")->setCity("Peoria")->setState("AZ")->setZip("85381")->setLatitude("33.61030");$practice->("-112.25421")->setPhone("(623) 476-5190");

		$practice = new Practices();
$practice->setPractice("Arizona Cardiovascular and Thoracic Surgeons")->setAddress1("8402 East Shea Blvd")->setAddress2("Suite 100")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58246")->setLongitude("-111.87362")->setPhone("(480) 661-0700");

		$practice = new Practices();
$practice->setPractice("Arizona Center for Cancer Care")->setAddress1("10460 N. 92nd Street")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58115")->setLongitude("-111.88368")->setPhone("(480) 278-8300");

		$practice = new Practices();
$practice->setPractice("Arizona Center for Cancer Care")->setAddress1("14155 N. 83rd Ave.")->setAddress2("Ste. 127")->setCity("Peoria")->setState("AZ")->setZip("85381")->setLatitude("33.61281");$practice->("-112.23679")->setPhone("(623) 773-2873");

		$practice = new Practices();
$practice->setPractice("Arizona Center for Cancer Care")->setAddress1("14674 W. Mountain View Blvd.")->setAddress2("Ste. 127")->setCity("Surprise")->setState("AZ")->setZip("85374")->setLatitude("33.65542");$practice->("-112.37668")->setPhone("(623) 466-7469");

		$practice = new Practices();
$practice->setPractice("Arizona Center for Cancer Care")->setAddress1("20950 N. 29th Ave.")->setCity("Phoenix")->setState("AZ")->setZip("85027")->setLatitude("33.67602");$practice->("-112.12079")->setPhone("(480) 278-8300");

		$practice = new Practices();
$practice->setPractice("Arizona Center for Cancer Care")->setAddress1("3645 S. Rome St.")->setAddress2("Ste. 116");$practice->("Gilbert")->setState("AZ")->setZip("85297")->setLatitude("33.28478")->setLongitude("-111.75031")->setPhone("(480) 278-8300");

		$practice = new Practices();
$practice->setPractice("Arizona Center for Cancer Care")->setAddress1("7337 E. 2nd Street")->setCity("Scottsdale")->setState("AZ")->setZip("85285")->setLatitude("33.49120")->setLongitude("-111.92369")->setPhone("(480) 949-7808");

		$practice = new Practices();
$practice->setPractice("Arizona Center for Pain Relief")->setAddress1("20950 North Tatum Blvd")->setAddress2("Suite 300")->setCity("Phoenix")->setState("AZ")->setZip("85050")->setLatitude("33.67619")->setLongitude("-111.97836")->setPhone("(480) 222-7246");

		$practice = new Practices();
$practice->setPractice("Arizona Digestive Health")->setAddress1("10290 N. 92nd St.")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58024")->setLongitude("-111.88379")->setPhone("(480) 767-3100");

		$practice = new Practices();
$practice->setPractice("Arizona Digestive Health")->setAddress1("8415 N Pima")->setAddress2("Suite 275")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.55708")->setLongitude("-111.89074")->setPhone("(480) 767-7273");

		$practice = new Practices();
$practice->setPractice("Arizona Digestive Health")->setAddress1("9755 N. 90th St")->setAddress2("Suite A205")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57460")->setLongitude("-111.88569",null,NOW()),

		$practice = new Practices();
$practice->setPractice("Arizona Digestive Health")->setAddress1("9767 N. 91st St.")->setAddress2("Ste. 100")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57394")->setLongitude("-111.88239")->setPhone("(480) 860-1990");

		$practice = new Practices();
$practice->setPractice("Arizona Eye Specialists")->setAddress1("13555 W. McDowell Rd.")->setAddress2("Ste. 102");$practice->("Goodyear")->setState("AZ")->setZip("85395")->setLatitude("33.46390");$practice->("-112.35101")->setPhone("(623) 209-0020");

		$practice = new Practices();
$practice->setPractice("Arizona Eye Specialists")->setAddress1("300 E. Osborn Rd.")->setAddress2("Ste. 100")->setCity("Phoenix")->setState("AZ")->setZip("85012")->setLatitude("33.48799");$practice->("-112.06880")->setPhone("(602) 254-7255");

		$practice = new Practices();
$practice->setPractice("Arizona Eye Specialists")->setAddress1("4915 E. Baseline Rd.")->setAddress2("Ste. 114");$practice->("Gilbert")->setState("AZ")->setZip("85234")->setLatitude("33.37887")->setLongitude("-111.83471")->setPhone("(489) 830-0120");

		$practice = new Practices();
$practice->setPractice("Arizona Eye Specialists")->setAddress1("5620 W. Thunderbird Rd.")->setAddress2("Ste. H-3")->setCity("Glendale")->setState("AZ")->setZip("85306")->setLatitude("33.61167");$practice->("-112.17987")->setPhone("(602) 547-2002");

		$practice = new Practices();
$practice->setPractice("Arizona Eye Specialists")->setAddress1("7245 E. Osborn Rd.")->setAddress2("Ste. 4")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48736")->setLongitude("-111.92507")->setPhone("(480) 994-5012");

		$practice = new Practices();
$practice->setPractice("Arizona Gastrointestinal Associates")->setAddress1("3271 N Civic Center Plaza")->setAddress2("Suite 2")->setCity("Scottsdale")->setState("AZ")->setZip("85250")->setLatitude("33.48605")->setLongitude("-111.92149")->setPhone("(480) 949-1260");

		$practice = new Practices();
$practice->setPractice("Arizona Gastrointestinal Associates")->setAddress1("8761 E. Bell Rd.")->setAddress2("Ste. 105")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.63918")->setLongitude("-111.89318")->setPhone("(480) 219-6662");

		$practice = new Practices();
$practice->setPractice("Arizona Hand and Wrist Specialists")->setAddress1("2940 E Banner Gateway Dr.")->setAddress2("Suite 350");$practice->("Gilbert")->setState("AZ")->setZip("85234")->setLatitude("33.38416")->setLongitude("-111.72574")->setPhone("(602) 393-1010");

		$practice = new Practices();
$practice->setPractice("Arizona Hand and Wrist Specialists")->setAddress1("690 N. Cofco Center Ct.")->setAddress2("Ste. 190")->setCity("Phoenix")->setState("AZ")->setZip("85008")->setLatitude("33.45551")->setLongitude("-111.99031")->setPhone("(603) 393-1010");

		$practice = new Practices();
$practice->setPractice("Arizona Hand and Wrist Specialists")->setAddress1("8630 East Via De Ventura")->setAddress2("Ste. 205")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.55411")->setLongitude("-111.89538")->setPhone("(602) 393-1010");

		$practice = new Practices();
$practice->setPractice("Arizona Heart and Lung Surgery")->setAddress1("10117 N. 92nd St.")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57821")->setLongitude("-111.88016")->setPhone("(480) 767-5544");

		$practice = new Practices();
$practice->setPractice("Arizona Kidney Disease and Hypertension Center")->setAddress1("11000 N. Scottsdale Rd.")->setAddress2("Ste. 120")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.58693")->setLongitude("-111.92674")->setPhone("(602) 943-1231");

		$practice = new Practices();
$practice->setPractice("Arizona Kidney Disease and Hypertension Center")->setAddress1("7331 E. Osborn Road")->setAddress2("Ste. 150")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48764")->setLongitude("-111.92426")->setPhone("(480) 994-1238");

		$practice = new Practices();
$practice->setPractice("Arizona Kidney Disease and Hypertension Center")->setAddress1("8415 N. Pima Rd.")->setAddress2("Ste. 150")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.55708")->setLongitude("-111.89074")->setPhone("(480) 551-1057");

		$practice = new Practices();
$practice->setPractice("Arizona Neurological Institute")->setAddress1("13640 North 99th Ave")->setAddress2("Suite 100");$practice->("Sun City")->setState("AZ")->setZip("85351")->setLatitude("33.60851");$practice->("-112.27045")->setPhone("(623) 972-3800");

		$practice = new Practices();
$practice->setPractice("Arizona Neurological Institute")->setAddress1("7304 East Deer Valley Road")->setAddress2("Suite E100")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.68451")->setLongitude("-111.92264")->setPhone("(623) 972-3800");

		$practice = new Practices();
$practice->setPractice("Arizona Neurology and Sleep Center")->setAddress1("10290 N. 92nd St.")->setAddress2("Ste. 300")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58024")->setLongitude("-111.88379")->setPhone("(480) 718-9241");

		$practice = new Practices();
$practice->setPractice("Arizona Ocular and Facial Plastic Surgery")->setAddress1("3501 N Scottsdale Road")->setAddress2("Ste 326")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48898")->setLongitude("-111.92584")->setPhone("(480) 949-5980");

		$practice = new Practices();
$practice->setPractice("Arizona Oculoplastic Specialists")->setAddress1("14275 N 87th Street")->setAddress2("Suite 113")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.61537")->setLongitude("-111.89242")->setPhone("(480) 905-1010");

		$practice = new Practices();
$practice->setPractice("Arizona Oculoplastic Specialists")->setAddress1("4825 E Baseline Rd")->setCity("Mesa")->setState("AZ")->setZip("85206")->setLatitude("33.37833")->setLongitude("-111.89361")->setPhone("(480) 905-1010");

		$practice = new Practices();
$practice->setPractice("Arizona Oncology Associates")->setAddress1("10197 N. 92nd St.")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57820")->setLongitude("-111.87864")->setPhone("(480) 993-2950");

		$practice = new Practices();
$practice->setPractice("Arizona Oncology Associates")->setAddress1("10460 N. 92nd St.")->setAddress2("Ste. 400")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58115")->setLongitude("-111.88368")->setPhone("(480) 860-2540");

		$practice = new Practices();
$practice->setPractice("Arizona Oncology Associates")->setAddress1("2222 E. Highland Ave")->setAddress2("Suite 400")->setCity("Phoenix")->setState("AZ")->setZip("85016")->setLatitude("33.50634");$practice->("-112.03388")->setPhone("(602) 277-4868");

		$practice = new Practices();
$practice->setPractice("Arizona Oncology Services")->setAddress1("19646 N 27th Ave")->setAddress2("Ste. 108")->setCity("Phoenix")->setState("AZ")->setZip("85027")->setLatitude("33.66550");$practice->("-112.11826")->setPhone("(602) 240-3503");

		$practice = new Practices();
$practice->setPractice("Arizona Orthopedic and Sports Medicine Specialists")->setAddress1("2222 E. Highland Ave.")->setAddress2("Ste. 425")->setCity("Phoenix")->setState("AZ")->setZip("85016")->setLatitude("33.50634");$practice->("-112.03388")->setPhone("(602) 667-6640");

		$practice = new Practices();
$practice->setPractice("Arizona Orthopedic Associates")->setAddress1("2905 W. Warner Road")->setAddress2("Suite 23")->setCity("Chandler")->setState("AZ")->setZip("85224")->setLatitude("33.33392")->setLongitude("-111.89129")->setPhone("(480) 345-2031");

		$practice = new Practices();
$practice->setPractice("Arizona Pain Specialists")->setAddress1("20940 North Tatum Blvd")->setAddress2("Suite B210")->setCity("Phoenix")->setState("AZ")->setZip("85050")->setLatitude("33.67568")->setLongitude("-111.97936")->setPhone("(480) 563-6400");

		$practice = new Practices();
$practice->setPractice("Arizona Pain Specialists")->setAddress1("9787 North 91st Street")->setAddress2("Ste 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57463")->setLongitude("-111.88249")->setPhone("(480) 563-6400");

		$practice = new Practices();
$practice->setPractice("Arizona Prostate Cancer Center")->setAddress1("11000 N. Scottsdale Rd.")->setAddress2("Ste. 120")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.58693")->setLongitude("-111.92674")->setPhone("(480) 455-3000");

		$practice = new Practices();
$practice->setPractice("Arizona Pulmonary Specialists")->setAddress1("9700 N. 91st St.")->setAddress2("Ste. A200")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57369")->setLongitude("-111.88347")->setPhone("(480) 614-2000");

		$practice = new Practices();
$practice->setPractice("Arizona State Urology")->setAddress1("20201 N. Scottsdale Healthcare Dr.")->setAddress2("Ste. 240")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.67102")->setLongitude("-111.92038")->setPhone("(602) 357-2400");

		$practice = new Practices();
$practice->setPractice("Arizona Transplant Associates")->setAddress1("2218 N 3rd Street")->setCity("Phoenix")->setState("AZ")->setZip("85004")->setLatitude("33.47188");$practice->("-112.06993")->setPhone("(602) 252-2543");

		$practice = new Practices();
$practice->setPractice("Arizona Urology Specialists")->setAddress1("10301 North 92nd Street")->setAddress2("Suite 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57954")->setLongitude("-111.88126")->setPhone("(480) 661-2662");

		$practice = new Practices();
$practice->setPractice("Armity Simon M.D.")->setAddress1("16421 N. Tatum Blvd.")->setAddress2("Ste. 201")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.63598")->setLongitude("-111.97742")->setPhone("(602) 904-1111");

		$practice = new Practices();
$practice->setPractice("Armity Simon M.D.")->setAddress1("9070 E. Desert Cove Ave.")->setAddress2("Ste. 102")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58561")->setLongitude("-111.88497")->setPhone("(480) 860-2322");

		$practice = new Practices();
$practice->setPractice("Arrow Surgical Associates")->setAddress1("10599 N Tatum Blvd")->setAddress2("Ste F-151")->setCity("Paradise Valley")->setState("AZ")->setZip("85253")->setLatitude("33.58175")->setLongitude("-111.97753")->setPhone("(602) 977-0758");

		$practice = new Practices();
$practice->setPractice("Arrow Surgical Associates")->setAddress1("20201 N. Scottsdale Healthcare Dr.")->setAddress2("Ste. 240")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.67102")->setLongitude("-111.92038")->setPhone("(602) 977-0758");

		$practice = new Practices();
$practice->setPractice("Arrow Surgical Associates")->setAddress1("7331 E. Osborn Road")->setAddress2("Ste. 180")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48764")->setLongitude("-111.92426")->setPhone("(602) 977-0758");

		$practice = new Practices();
$practice->setPractice("Associated Retina Consultants")->setAddress1("15353 N 91st Ave.")->setCity("Peoria")->setState("AZ")->setZip("85381")->setLatitude("33.62364");$practice->("-112.25404")->setPhone("(602) 242-4928");

		$practice = new Practices();
$practice->setPractice("Associated Retina Consultants")->setAddress1("1750 E. Glendale Ave.")->setCity("Phoenix")->setState("AZ")->setZip("85020")->setLatitude("33.53888");$practice->("-112.04424")->setPhone("(602) 242-4928");

		$practice = new Practices();
$practice->setPractice("Atria Heart, PPL")->setAddress1("16427 N. Scottsdale Road")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.63679")->setLongitude("-111.92356")->setPhone("(480) 718-5072");

		$practice = new Practices();
$practice->setPractice("BCG Oncology")->setAddress1("3815 E. Bell Rd.")->setAddress2("Ste. 1210")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.63850")->setLongitude("-111.99909")->setPhone("(602) 493-6626");

		$practice = new Practices();
$practice->setPractice("Berardi Aesthetics and Plastic Surgery")->setAddress1("11000 N. Scottsdale Road")->setAddress2("Suite 100")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.58693")->setLongitude("-111.92674")->setPhone("(480) 502-4567");

		$practice = new Practices();
$practice->setPractice("Bertrand P Kaper, MD PC")->setAddress1("20401 N 73rd Street")->setAddress2("Ste 275")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.67300")->setLongitude("-111.92368")->setPhone("(480) 305-0034");

		$practice = new Practices();
$practice->setPractice("Bertrand P Kaper, MD PC")->setAddress1("3655 Crossings Drive")->setCity("Prescott")->setState("AZ")->setZip("86305");$practice->("34.59663");$practice->("-112.46709")->setPhone("(928) 778-9250");

		$practice = new Practices();
$practice->setPractice("Bruce Freedman M.D.")->setAddress1("10250 N. 92nd St.")->setAddress2("Ste. 307")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58047")->setLongitude("-111.88277")->setPhone("(480) 941-0866");

		$practice = new Practices();
$practice->setPractice("Bryan D. Friedman, D.O., LLC")->setAddress1("2255 N Scottsdale Rd.")->setCity("Scottsdale")->setState("AZ")->setZip("85257")->setLatitude("33.47267")->setLongitude("-111.92558")->setPhone("(480) 464-8000");

		$practice = new Practices();
$practice->setPractice("Cactus Pediatric Orthopedics")->setAddress1("1500 S. Dobson Rd.")->setAddress2("Ste. 200")->setCity("Mesa")->setState("AZ")->setZip("85202")->setLatitude("33.38739")->setLongitude("-111.87628")->setPhone("(480) 551-0300");

		$practice = new Practices();
$practice->setPractice("Cactus Pediatric Orthopedics")->setAddress1("9003 E. Shea Blvd")->setCity("Scottsdale")->setState("AZ")->setZip("85252")->setLatitude("33.58095")->setLongitude("-111.88525")->setPhone("(480) 551-0300");

		$practice = new Practices();
$practice->setPractice("Cardiologists of Scottsdale")->setAddress2("7970 E. Thompson Peak Pkwy.")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.67149")->setLongitude("-111.90994")->setPhone("(480) 419-9033");

		$practice = new Practices();
$practice->setPractice("Cardiovascular Consultants")->setAddress1("10210 N. 92nd St.")->setAddress2("Ste. 301")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57927")->setLongitude("-111.88255")->setPhone("(480) 391-0555");

		$practice = new Practices();
$practice->setPractice("Cardiovascular Consultants")->setAddress1("13620 N. Saguaro Blvd")->setAddress2("Suite 50")->setCity("Fountain Hills")->setState("AZ")->setZip("85268")->setLatitude("33.60895")->setLongitude("-111.71507")->setPhone("(480) 836-8703");

		$practice = new Practices();
$practice->setPractice("Cardiovascular Consultants")->setAddress1("16222 N. 59th Avenue")->setAddress2("Suite A100")->setCity("Glendale")->setState("AZ")->setZip("85306")->setLatitude("33.63312");$practice->("-112.18602")->setPhone("(623) 334-4000");

		$practice = new Practices();
$practice->setPractice("Cardiovascular Consultants")->setAddress1("18700 N. 64th Drive")->setAddress2("Suite 101")->setCity("Glendale")->setState("AZ")->setZip("85308")->setLatitude("33.65519");$practice->("-112.20053")->setPhone("(623) 561-6211");

		$practice = new Practices();
$practice->setPractice("Cardiovascular Consultants")->setAddress1("19646 N. 27th Avenue")->setAddress2("Suite 408")->setCity("Phoenix")->setState("AZ")->setZip("85027")->setLatitude("33.66550");$practice->("-112.11826")->setPhone("(623) 582-1465");

		$practice = new Practices();
$practice->setPractice("Cardiovascular Consultants")->setAddress1("2905 West Warner Road")->setAddress2("Suite 12")->setCity("Chandler")->setState("AZ")->setZip("85224")->setLatitude("33.33392")->setLongitude("-111.89129",null,NOW()),

		$practice = new Practices();
$practice->setPractice("Cardiovascular Consultants")->setAddress1("3501 N. Scottsdale Road")->setAddress2("Suite 348")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48898")->setLongitude("-111.92584")->setPhone("(480) 947-3575");

		$practice = new Practices();
$practice->setPractice("Cardiovascular Consultants")->setAddress1("3624 W. Anthem Way")->setAddress2("Suite C100");$practice->("anthem")->setState("AZ")->setZip("85086")->setLatitude("33.48898")->setLongitude("-111.92584")->setPhone("(623) 551-2866");

		$practice = new Practices();
$practice->setPractice("Cardiovascular Consultants")->setAddress1("3805 E. Bell Rd.")->setAddress2("Ste. 3100")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.64026")->setLongitude("-111.99990")->setPhone("(602) 867-8644");

		$practice = new Practices();
$practice->setPractice("Cardiovascular Consultants")->setAddress1("5422 W. Thunderbird Road")->setAddress2("Suite 8")->setCity("Glendale")->setState("AZ")->setZip("85306")->setLatitude("33.61124");$practice->("-112.17633")->setPhone("(602) 978-0698");

		$practice = new Practices();
$practice->setPractice("Cardiovascular Consultants")->setAddress1("5620 W. Thunderbird Road")->setAddress2("Suite E4")->setCity("Glendale")->setState("AZ")->setZip("85306")->setLatitude("33.61167");$practice->("-112.17987")->setPhone("(602) 652-8780");

		$practice = new Practices();
$practice->setPractice("Cardiovascular Consultants")->setAddress1("6036 N. 19th Avenue")->setAddress2("Ste. 312")->setCity("Phoenix")->setState("AZ")->setZip("85015")->setLatitude("33.52577");$practice->("-112.10059")->setPhone("(602) 246-5570");

		$practice = new Practices();
$practice->setPractice("Cardiovascular Consultants")->setAddress1("606 North Country Club Drive")->setAddress2("Suite 4")->setCity("Mesa")->setState("AZ")->setZip("85201")->setLatitude("33.42648")->setLongitude("-111.84034",null,NOW()),

		$practice = new Practices();
$practice->setPractice("Cardiovascular Consultants")->setAddress1("8575 E. Princess Drive")->setAddress2("Suite 115")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.64493")->setLongitude("-111.89382")->setPhone("(480) 538-1355");

		$practice = new Practices();
$practice->setPractice("Cardiovascular Consultants")->setAddress1("9100 N. 2nd Street")->setAddress2("Suite 321")->setCity("Phoenix")->setState("AZ")->setZip("85020")->setLatitude("33.56905");$practice->("-112.07217")->setPhone("(602) 870-1789");

		$practice = new Practices();
$practice->setPractice("Cardiovascular Institute of Scottsdale")->setAddress1("10117 North 92nd Street")->setAddress2("Ste. 103")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57821")->setLongitude("-111.88016")->setPhone("(480) 747-6532");

		$practice = new Practices();
$practice->setPractice("Cardiovascular Institute of Scottsdale")->setAddress1("9445 E. Ironwood Square Dr.")->setAddress2("Ste. 110")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57763")->setLongitude("-111.87763")->setPhone("(480) 747-6532");

		$practice = new Practices();
$practice->setPractice("Cardiovascular Institute of Scottsdale")->setAddress1("20401 N. 73rd St.")->setAddress2("Ste. 105")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.67300")->setLongitude("-111.92368")->setPhone("(480) 747-6532");

		$practice = new Practices();
$practice->setPractice("Care MD PLC")->setAddress1("2899 N. 87th Street")->setAddress2("Suite 110")->setCity("Scottsdale")->setState("AZ")->setZip("85257")->setLatitude("33.48010")->setLongitude("-111.89216")->setPhone("(480) 699-7004");

		$practice = new Practices();
$practice->setPractice("Care MD PLC")->setAddress1("4845 E. Thunderbird Road")->setAddress2("Suite 1")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.61109")->setLongitude("-111.97554")->setPhone("(480) 699-7004");

		$practice = new Practices();
$practice->setPractice("Center for Dermatology, PC")->setAddress1("14275 N 87th Street")->setAddress2("Ste 110")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.61537")->setLongitude("-111.89242")->setPhone("(480) 905-8485");

		$practice = new Practices();
$practice->setPractice("Center for Dermatology, PC")->setAddress1("16838 E Palisades Blvd")->setAddress2("Ste B124")->setCity("Fountain Hills")->setState("AZ")->setZip("85268")->setLatitude("33.60797")->setLongitude("-111.71666")->setPhone("(480) 905-8485");

		$practice = new Practices();
$practice->setPractice("Center for Dermatology, PC")->setAddress1("25229 S Sun Lakes Blvd")->setAddress2("Ste 202")->setCity("Sun Lakes")->setState("AZ")->setZip("85248")->setLatitude("33.21740")->setLongitude("-111.88403")->setPhone("(480) 905-8485");

		$practice = new Practices();
$practice->setPractice("Center for Dermatology, PC")->setAddress1("740 E Highland Ave")->setAddress2("Ste 100")->setCity("Phoenix")->setState("AZ")->setZip("85014")->setLatitude("33.50599");$practice->("-112.06338")->setPhone("(480) 905-8485");

		$practice = new Practices();
$practice->setPractice("Center for Pain and Supportive Care")->setAddress1("4611 East Shea Blvd")->setAddress2("Bldg. 3 Suite 170")->setCity("Phoenix")->setState("AZ")->setZip("85028")->setLatitude("33.58236")->setLongitude("-111.98187")->setPhone("(480) 889-0180");

		$practice = new Practices();
$practice->setPractice("Clear Dermatology and Aesthetics Center")->setAddress1("20201 N. Scottsdale Healthcare Dr.")->setAddress2("Ste. 260")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.67102")->setLongitude("-111.92038")->setPhone("(480) 398-1550");

		$practice = new Practices();
$practice->setPractice("Colon and Rectal Clinic of Scottsdale")->setAddress1("8415 N Pima Road")->setAddress2("Suite 288")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.55709")->setLongitude("-111.89074")->setPhone("(480) 947-3533");

		$practice = new Practices();
$practice->setPractice("Comprehensive Breast Center of Arizona")->setAddress1("19646 N. 27th Avenue")->setAddress2("Suite 403")->setCity("Phoenix")->setState("AZ")->setZip("85027")->setLatitude("33.66550");$practice->("-112.11826")->setPhone("(602) 374-3440");

		$practice = new Practices();
$practice->setPractice("Comprehensive Breast Center of Arizona")->setAddress1("9179 W. Thunderbird Rd.")->setAddress2("Ste. 103")->setCity("Peoria")->setState("AZ")->setZip("85381")->setLatitude("33.60844");$practice->("-112.25709")->setPhone("(602) 374-3440");

		$practice = new Practices();
$practice->setPractice("Comprehensive Breast Center of Arizona")->setAddress1("9965 N. 95th Street")->setAddress2("Suite 105")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57745")->setLongitude("-111.87575")->setPhone("(480) 629-8390");

		$practice = new Practices();
$practice->setPractice("DC Ranch Family Medicine, PLLC")->setAddress1("20945 N Pima Road")->setAddress2("Suite 110")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.67614")->setLongitude("-111.88881")->setPhone("(480) 800-3550");

		$practice = new Practices();
$practice->setPractice("Deborah D. Wilson, MD")->setAddress1("10250 N 92nd Street")->setAddress2("Suite 102")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58047")->setLongitude("-111.88277")->setPhone("(480)860-4791");

		$practice = new Practices();
$practice->setPractice("Deborah Trojanowski, MD")->setAddress1("10617 N. Hayden Road")->setAddress2("B102")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58443")->setLongitude("-111.90692")->setPhone("(480) 481-0133");

		$practice = new Practices();
$practice->setPractice("Deer Valley OB/GYN")->setAddress1("2033 North 19th Ave.")->setAddress2("Building 4 Suite 100")->setCity("Phoenix")->setState("AZ")->setZip("85027")->setLatitude("33.68340");$practice->("-112.09976")->setPhone("(623) 879-8161");

		$practice = new Practices();
$practice->setPractice("Dermatique")->setAddress1("6900 E. Camelback Rd.")->setAddress2("Ste. 900")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.50269")->setLongitude("-111.93209")->setPhone("(480) 619-5540");

		$practice = new Practices();
$practice->setPractice("Derosa Medical")->setAddress1("9377 E. Bell Rd.")->setAddress2("Ste. 143")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.63735")->setLongitude("-111.88224")->setPhone("(480) 619-4097");

		$practice = new Practices();
$practice->setPractice("Desert Center for Allergy and Chest Diseases")->setAddress1("3815 East Bell Road")->setAddress2("Suite 4400")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.63850")->setLongitude("-111.99909")->setPhone("(602) 788-7211");

		$practice = new Practices();
$practice->setPractice("Desert Center for Allergy and Chest Diseases")->setAddress1("8575 E. Princess Dr.")->setAddress2("Ste. 201")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.64493")->setLongitude("-111.89382")->setPhone("(602) 222-2736");

		$practice = new Practices();
$practice->setPractice("Desert Institute for Spine Care, PC")->setAddress1("1635 East Myrtle Ave")->setAddress2("Suite 400")->setCity("Phoenix")->setState("AZ")->setZip("85020")->setLatitude("33.54160");$practice->("-112.04595")->setPhone("(602) 944-2900");

		$practice = new Practices();
$practice->setPractice("Desert Institute for Spine Care, PC")->setAddress1("3487 South Mercy Road")->setCity("Gilbert")->setState("AZ")->setZip("85297")->setLatitude("33.28600")->setLongitude("-111.74989")->setPhone("(602) 944-2900");

		$practice = new Practices();
$practice->setPractice("Desert Institute for Spine Care, PC")->setAddress1("8630 East Via De Ventura")->setAddress2("Suite 210")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.55411")->setLongitude("-111.89538")->setPhone("(602) 944-2900");

		$practice = new Practices();
$practice->setPractice("Desert Jewel Obstetrics & Gynecology")->setAddress1("3501 N. Scottsdale Rd.")->setAddress2("Ste. 230")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48898")->setLongitude("-111.92584")->setPhone("(480) 970-1937");

		$practice = new Practices();
$practice->setPractice("Desert Kidney Associates, PLC")->setAddress1("1600 W Chandler Blvd")->setAddress2("Ste 110")->setCity("Chandler")->setState("AZ")->setZip("85224")->setLatitude("33.30694")->setLongitude("-111.86931")->setPhone("(480) 834-9039");

		$practice = new Practices();
$practice->setPractice("Desert Kidney Associates, PLC")->setAddress1("3511 S Mercy Rd")->setAddress2("Ste 102");$practice->("Gilbert")->setState("AZ")->setZip("85296")->setLatitude("33.28553")->setLongitude("-111.75005")->setPhone("(480) 834-9039");

		$practice = new Practices();
$practice->setPractice("Desert Kidney Associates, PLC")->setAddress1("37100 N Gantzel Rd")->setAddress2("Ste 113");$practice->("San Tan Valley")->setState("AZ")->setZip("85140")->setLatitude("33.21587")->setLongitude("-111.56414")->setPhone("(480) 834-9039");

		$practice = new Practices();
$practice->setPractice("Desert Kidney Associates, PLC")->setAddress1("612 W Baseline Road")->setCity("Mesa")->setState("AZ")->setZip("85210")->setLatitude("33.37914")->setLongitude("-111.84485")->setPhone("(480) 834-9039");

		$practice = new Practices();
$practice->setPractice("Desert Kidney Associates, PLC")->setAddress1("6750 E Baywood Ave.")->setAddress2("Ste 505")->setCity("Mesa")->setState("AZ")->setZip("85206")->setLatitude("33.41136")->setLongitude("-111.68584")->setPhone("(480) 834-9039");

		$practice = new Practices();
$practice->setPractice("Desert Orthopedic Specialists")->setAddress1("2905 W Warner")->setAddress2("Suite 23")->setCity("Chandler")->setState("AZ")->setZip("85224")->setLatitude("33.33392")->setLongitude("-111.89129")->setPhone("(480) 345-2031");

		$practice = new Practices();
$practice->setPractice("Desert Ridge Family Physicians")->setAddress1("20940 N. Tatum Blvd.")->setAddress2("Ste. 300")->setCity("Phoenix")->setState("AZ")->setZip("85050")->setLatitude("33.67568")->setLongitude("-111.97936")->setPhone("(480) 607-0060");

		$practice = new Practices();
$practice->setPractice("Desert Spine & Sports Physicians")->setAddress1("3700 N. 24th St")->setAddress2("Ste. 210")->setCity("Phoenix")->setState("AZ")->setZip("85016")->setLatitude("33.49070");$practice->("-112.03049")->setPhone("(602) 840-0681");

		$practice = new Practices();
$practice->setPractice("Desert Spine & Sports Physicians")->setAddress1("6636 E. Baseline Rd")->setAddress2("Ste. 100")->setCity("Mesa")->setState("AZ")->setZip("85206")->setLatitude("33.37887")->setLongitude("-111.83465")->setPhone("(602) 840-0681");

		$practice = new Practices();
$practice->setPractice("Desert Springs Cancer Care")->setAddress1("16838 E. Palisades Blvd.")->setAddress2("Suite C-153")->setCity("Fountain Hills")->setState("AZ")->setZip("85268")->setLatitude("33.60797")->setLongitude("-111.71666",null,NOW()),

		$practice = new Practices();
$practice->setPractice("Desert Springs Cancer Care")->setAddress1("21803 N. Scottsdale Road")->setAddress2("Suite 110")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.67171")->setLongitude("-111.92334")->setPhone("(480) 585-4673");

		$practice = new Practices();
$practice->setPractice("Desert Vista Medical Associates")->setAddress1("7400 E. Osborn Road")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48867")->setLongitude("-111.92315")->setPhone("(480) 607-3800");

		$practice = new Practices();
$practice->setPractice("Desert Vista Medical Associates")->setAddress1("7400 E. Thompson Peak Parkway")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.67069")->setLongitude("-111.92203")->setPhone("(480) 324-7000");

		$practice = new Practices();
$practice->setPractice("DiabeVita Medical Center")->setAddress1("7400 E. McDonald Dr.")->setAddress2("Ste. 105")->setCity("Scottsdale")->setState("AZ")->setZip("85250")->setLatitude("33.52432")->setLongitude("-111.92104")->setPhone("(480) 315-9757");

		$practice = new Practices();
$practice->setPractice("Digestive Health Specialist - Arizona")->setAddress1("8573 E. Princess Dr.")->setAddress2("Suite 215")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.64545")->setLongitude("-111.89432")->setPhone("(480) 563-5757");

		$practice = new Practices();
$practice->setPractice("Donald A. Opila M.D.")->setAddress1("7331 E. Osborn Road")->setAddress2("Ste. 400")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48764")->setLongitude("-111.92426")->setPhone("(480) 994-1166");

		$practice = new Practices();
$practice->setPractice("East Scottsdale Medical Care")->setAddress1("10565 N. 114th St.")->setAddress2("Ste. 103")->setCity("Scottsdale")->setState("AZ")->setZip("85259")->setLatitude("33.58195")->setLongitude("-111.83296")->setPhone("(480) 621-3505");

		$practice = new Practices();
$practice->setPractice("East Valley Endocrinology Diabetes and Metabolism")->setAddress1("9500 East Ironwood Square Dr.")->setAddress2("Suite 201")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57847")->setLongitude("-111.87626")->setPhone("(480) 664-8988");

		$practice = new Practices();
$practice->setPractice("Elena Sibley, MD")->setAddress1("3604 North Wells Fargo")->setAddress2("Suite L")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48981")->setLongitude("-111.92355")->setPhone("(480) 947-7401");

		$practice = new Practices();
$practice->setPractice("Endocrinology Diabetes & Longevity Center of Arizona")->setAddress1("4045 W. Chandler Blvd.")->setCity("Chandler")->setState("AZ")->setZip("85226")->setLatitude("33.30453")->setLongitude("-111.91189")->setPhone("(480) 513-1042");

		$practice = new Practices();
$practice->setPractice("Endocrinology Diabetes & Longevity Center of Arizona")->setAddress1("7344 E. Deer Valley Road")->setAddress2("Suite 100")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.68546")->setLongitude("-111.92233")->setPhone("(480) 513-1042");

		$practice = new Practices();
$practice->setPractice("Entegrity Ear, Nose and Throat Specialists")->setAddress1("6950 E. Chauncey Ln.")->setAddress2("Ste. 100")->setCity("Phoenix")->setState("AZ")->setZip("85054")->setLatitude("33.65210")->setLongitude("-111.93070")->setPhone("(480) 538-3200");

		$practice = new Practices();
$practice->setPractice("Evangelista Orthopedic Clinic")->setAddress1("6740 E. Camelback Rd.")->setAddress2("Stuite 101")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.50249")->setLongitude("-111.93619")->setPhone("(480) 656-0291");

		$practice = new Practices();
$practice->setPractice("F. Timm McCarty D.O.")->setAddress1("7555 E. Osborn Rd.")->setAddress2("Ste. 104")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48732")->setLongitude("-111.91820")->setPhone("(480) 947-5454");

		$practice = new Practices();
$practice->setPractice("F.S. Simonie M.D.")->setAddress1("10210 N. 92nd St.")->setAddress2("Ste. 205")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57927")->setLongitude("-111.88255")->setPhone("(480) 314-1189");

		$practice = new Practices();
$practice->setPractice("Family Care Providers of Arizona")->setAddress1("10277 N. 92nd St.")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57863")->setLongitude("-111.87948")->setPhone("(480) 609-1444");

		$practice = new Practices();
$practice->setPractice("Family Practice Specialists")->setAddress1("4350 E. Camelback Rd.")->setAddress2("Ste. F-100")->setCity("Phoenix")->setState("AZ")->setZip("85018")->setLatitude("33.51007")->setLongitude("-111.98784")->setPhone("(602) 955-8700");

		$practice = new Practices();
$practice->setPractice("Foot and Ankle Center of AZ")->setAddress1("7312 East Deer Valley Road")->setAddress2("Ste #110")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.68485")->setLongitude("-111.92270")->setPhone("(480) 342-9999");

		$practice = new Practices();
$practice->setPractice("Fountain Hills Pediatrics and Internal Medicine")->setAddress1("13620 North Saguaro Blvd")->setAddress2("Suite 100")->setCity("Fountain Hills")->setState("AZ")->setZip("85268")->setLatitude("33.60895")->setLongitude("-111.71507")->setPhone("(480) 837-6800");

		$practice = new Practices();
$practice->setPractice("Four Peaks Neurology")->setAddress1("9746 N. 90th Pl.")->setAddress2("Ste. 203")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57391")->setLongitude("-111.88565")->setPhone("(480) 614-0707");

		$practice = new Practices();
$practice->setPractice("Gary Adler M.D.")->setAddress1("13840 N. Northsight Blvd.")->setAddress2("Ste. 121")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.61194")->setLongitude("-111.89672")->setPhone("(480) 860-8380");

		$practice = new Practices();
$practice->setPractice("Gary M. Weiner M.D.")->setAddress1("7301 E. 2nd St.")->setAddress2("Ste. 206")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.49105")->setLongitude("-111.92413")->setPhone("(480) 947-3700");

		$practice = new Practices();
$practice->setPractice("Gawley Plastic Surgery M.D")->setAddress1("8913 East Bell Road")->setAddress2("Suite 101B")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.63912")->setLongitude("-111.88781")->setPhone("(480) 860-2173");

		$practice = new Practices();
$practice->setPractice("Geoffrey H. Cook MD")->setAddress1("10250 N 92nd Street")->setAddress2("Suite 206")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58047")->setLongitude("-111.88277")->setPhone("(480) 656-4370");

		$practice = new Practices();
$practice->setPractice("Geoffrey H. Cook MD")->setAddress1("75 Tortilla Drive")->setCity("Sedona")->setState("AZ")->setZip("86336");$practice->("34.86322")->setLongitude("-111.81143")->setPhone("(928) 282-1522");

		$practice = new Practices();
$practice->setPractice("Gerrit Henry D.O.")->setAddress1("7331 E Osborne Drive")->setAddress2("#250")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48659")->setLongitude("-111.92410")->setPhone("(480) 947-7725");

		$practice = new Practices();
$practice->setPractice("Gordon Grado, MD, Inc.")->setAddress1("2926 North Civic Center Plaza")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48132")->setLongitude("-111.92244")->setPhone("(480) 614-6300");

		$practice = new Practices();
$practice->setPractice("Gordon Grado, MD, Inc.")->setAddress1("5310 W Thunderbird Road")->setAddress2("Suite 108")->setCity("Glendale")->setState("AZ")->setZip("85306")->setLatitude("33.61156");$practice->("-112.17488")->setPhone("(602) 978-0900");

		$practice = new Practices();
$practice->setPractice("Gregory M. Crever, M.D.")->setAddress1("8600 E. Via de Ventura")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.55420")->setLongitude("-111.89589")->setPhone("(480) 991-3480");

		$practice = new Practices();
$practice->setPractice("Gynecology Today, PLLC")->setAddress1("10210 N 92nd Street")->setAddress2("Suite 201")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57927")->setLongitude("-111.88255")->setPhone("(480) 291-6600");

		$practice = new Practices();
$practice->setPractice("GyneMedic")->setAddress1("16421 N. Tatum Blvd.")->setAddress2("Ste. 201")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.63598")->setLongitude("-111.97742")->setPhone("(602) 904-1111");

		$practice = new Practices();
$practice->setPractice("HonorHealth Bariatric Center")->setAddress1("10210 N. 92nd St.")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57927")->setLongitude("-111.88255")->setPhone("(480) 882-7460");

		$practice = new Practices();
$practice->setPractice("HonorHealth Center for Endocrine and Pancreas Surgery")->setAddress1("10460 N. 92nd St")->setAddress2("Ste. 401")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58115")->setLongitude("-111.88368")->setPhone("(480) 882-7400");

		$practice = new Practices();
$practice->setPractice("HonorHealth Corporate Health - Osborn")->setAddress1("3501 N Scottsdale")->setAddress2("Suite 231")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48898")->setLongitude("-111.92584")->setPhone("(480) 882-4770");

		$practice = new Practices();
$practice->setPractice("HonorHealth Gastroenterology - Osborn")->setAddress1("3501 N. Scottsdale Road")->setAddress2("Suite 320")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48898")->setLongitude("-111.92584")->setPhone("(480) 882-5740");

		$practice = new Practices();
$practice->setPractice("HonorHealth Gastroenterology - Shea")->setAddress1("10250 North 92nd Street")->setAddress2("Suite 210")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58047")->setLongitude("-111.88277")->setPhone("(480) 424-7228");

		$practice = new Practices();
$practice->setPractice("HonorHealth Gastroenterology - Thompson Peak")->setAddress1("20401 N. 73rd St.")->setAddress2("Ste. 210")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.67300")->setLongitude("-111.92368")->setPhone("(480) 882-7510");

		$practice = new Practices();
$practice->setPractice("HonorHealth Heart Group - Shea")->setAddress1("10101 N. 92nd St.")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57872")->setLongitude("-111.88012")->setPhone("(480) 882-7450");

		$practice = new Practices();
$practice->setPractice("HonorHealth Inpatient Psychiatry")->setAddress1("10250 N. 92nd Street")->setAddress2("Suite 304")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58047")->setLongitude("-111.88277")->setPhone("(480) 451-6798");

		$practice = new Practices();
$practice->setPractice("HonorHealth Medical Group - Arcadia 100")->setAddress1("4840 E. Indian School Rd.")->setAddress2("Ste. 100")->setCity("Phoenix")->setState("AZ")->setZip("85018")->setLatitude("33.49534")->setLongitude("-111.97665")->setPhone("(480) 882-7360");

		$practice = new Practices();
$practice->setPractice("HonorHealth Medical Group - Arcadia 101")->setAddress1("4840 E. Indian School Rd.")->setAddress2("Ste. 101")->setCity("Phoenix")->setState("AZ")->setZip("85018")->setLatitude("33.49534")->setLongitude("-111.97665")->setPhone("(480) 882-7350");

		$practice = new Practices();
$practice->setPractice("HonorHealth Medical Group - Chaparral")->setAddress1("5111 N. Scottsdale Rd.")->setCity("Scottsdale")->setState("AZ")->setZip("85250")->setLatitude("33.51181")->setLongitude("-111.92494")->setPhone("(480)882-7330");

		$practice = new Practices();
$practice->setPractice("HonorHealth Medical Group - East Tempe")->setAddress1("1845 East Broadway Road")->setAddress2("Ste 116");$practice->("Tempe")->setState("AZ")->setZip("85282")->setLatitude("33.40660")->setLongitude("-111.90752")->setPhone("(480) 882-7380");

		$practice = new Practices();
$practice->setPractice("HonorHealth Medical Group - McKellips")->setAddress1("1124 E. McKellips Road")->setAddress2("Suite 110")->setCity("Mesa")->setState("AZ")->setZip("85203")->setLatitude("33.45207")->setLongitude("-111.80642")->setPhone("(480) 882-7370");

		$practice = new Practices();
$practice->setPractice("HonorHealth Medical Group - Mescal")->setAddress1("10900 N. Scottsdale Road")->setAddress2("Suite 603")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.58658")->setLongitude("-111.92670")->setPhone("(480)882-7470");

		$practice = new Practices();
$practice->setPractice("HonorHealth Medical Group - Osborn")->setAddress1("7301 East 2nd Street")->setAddress2("Suite 300")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.49105")->setLongitude("-111.92413")->setPhone("(480) 882-7300");

		$practice = new Practices();
$practice->setPractice("HonorHealth Medical Group - Paradise Valley")->setAddress1("5010 East Shea Blvd")->setAddress2("Suite D100")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.58333")->setLongitude("-111.97301")->setPhone("(480) 882-7420");

		$practice = new Practices();
$practice->setPractice("HonorHealth Medical Group - Shea")->setAddress1("10301 N. 92nd Street")->setAddress2("Suite B-201")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57954")->setLongitude("-111.88126")->setPhone("(480) 882-7410");

		$practice = new Practices();
$practice->setPractice("HonorHealth Medical Group - Thompson Peak")->setAddress1("20401 N. 73rd St.")->setAddress2("Ste. 105")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.67300")->setLongitude("-111.92368")->setPhone("(480) 882-7500");

		$practice = new Practices();
$practice->setPractice("HonorHealth Medical Group - West Tempe")->setAddress1("1626 S Priest Drive")->setAddress2("Suite 104");$practice->("Tempe")->setState("AZ")->setZip("85281")->setLatitude("33.41092")->setLongitude("-111.96121")->setPhone("(480) 882-7320");

		$practice = new Practices();
$practice->setPractice("HonorHealth Neurology - Shea")->setAddress1("10250 N. 92nd St.")->setAddress2("Ste. 304")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58047")->setLongitude("-111.88277")->setPhone("(480) 451-6798");

		$practice = new Practices();
$practice->setPractice("HonorHealth Surgical and Trauma Specialists")->setAddress1("3501 N. Scottsdale Rd.")->setAddress2("Ste. 320")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48898")->setLongitude("-111.92584")->setPhone("(480) 882-5730");

		$practice = new Practices();
$practice->setPractice("HonorHealth Urgent Care Plus")->setAddress1("13843 N. Tatum Blvd.")->setAddress2("Ste. 1")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.61307")->setLongitude("-111.97708")->setPhone("(480) 323-3366");

		$practice = new Practices();
$practice->setPractice("Horizon Eye Specialists and Lasik Center")->setAddress1("16150 North Arrowhead Fountain Center Drive")->setAddress2("Suite H192")->setCity("Peoria")->setState("AZ")->setZip("85382")->setLatitude("33.63501");$practice->("-112.23700")->setPhone("(602) 467-4966");

		$practice = new Practices();
$practice->setPractice("Horizon Eye Specialists and Lasik Center")->setAddress1("18325 N. Allied Way")->setAddress2("Ste. 100")->setCity("Phoenix")->setState("AZ")->setZip("85054")->setLatitude("33.65290")->setLongitude("-111.92959")->setPhone("(602) 467-4966");

		$practice = new Practices();
$practice->setPractice("Horizon Eye Specialists and Lasik Center")->setAddress1("3030 North 3rd Street")->setAddress2("Suite 1250")->setCity("Phoenix")->setState("AZ")->setZip("85012")->setLatitude("33.48332");$practice->("-112.06988")->setPhone("(602) 467-4966");

		$practice = new Practices();
$practice->setPractice("Integrated Orthopedics of AZ, PPLC")->setAddress1("20940 N Tatum Blvd.")->setAddress2("B-290")->setCity("Scottsdale")->setState("AZ")->setZip("85050")->setLatitude("33.69654")->setLongitude("-111.96907")->setPhone("(602) 734-1834");

		$practice = new Practices();
$practice->setPractice("Integrative Cardiology & Preventative Medicine Center")->setAddress1("10900 N. Scottsdale Rd.")->setAddress2("Ste. 504")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.58658")->setLongitude("-111.92670")->setPhone("(480) 860-2030");

		$practice = new Practices();
$practice->setPractice("Ironwood Physicians, PC")->setAddress1("11209 N. Tatum Blvd.")->setAddress2("Ste. 260")->setCity("Phoenix")->setState("AZ")->setZip("85028")->setLatitude("33.58820")->setLongitude("-111.97649")->setPhone("(602) 494-6800");

		$practice = new Practices();
$practice->setPractice("Ironwood Physicians, PC")->setAddress1("3645 S. Rome Street")->setAddress2("Suite 209");$practice->("Gilbert")->setState("AZ")->setZip("85297")->setLatitude("33.28478")->setLongitude("-111.75031",null,NOW()),

		$practice = new Practices();
$practice->setPractice("Ironwood Physicians, PC")->setAddress1("4633 East Chandler Blvd")->setAddress2("Suite 100")->setCity("Chandler")->setState("AZ")->setZip("85048")->setLatitude("33.30236")->setLongitude("-111.98120")->setPhone("(602) 494-8600");

		$practice = new Practices();
$practice->setPractice("Ironwood Physicians, PC")->setAddress1("5810 West Beverly Lane")->setCity("Glendale")->setState("AZ")->setZip("85306")->setLatitude("33.63414");$practice->("-112.18356")->setPhone("(602) 494-6800");

		$practice = new Practices();
$practice->setPractice("Ironwood Physicians, PC")->setAddress1("6111 East Arbor Ave")->setCity("Mesa")->setState("AZ")->setZip("85206")->setLatitude("33.41289")->setLongitude("-111.69938")->setPhone("(480) 981-1326");

		$practice = new Practices();
$practice->setPractice("Ironwood Physicians, PC")->setAddress1("695 South Dobson Road")->setCity("Chandler")->setState("AZ")->setZip("85224")->setLatitude("33.29403")->setLongitude("-111.87356")->setPhone("(480) 821-2838");

		$practice = new Practices();
$practice->setPractice("Ironwood Physicians, PC")->setAddress1("8880 E. Desert Cove Ave")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58528")->setLongitude("-111.88934")->setPhone("(480) 314-6670");

		$practice = new Practices();
$practice->setPractice("Jamie Kapner M.D.")->setAddress1("10210 N. 92nd St.")->setAddress2("Ste. 100")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57927")->setLongitude("-111.88255")->setPhone("(480) 860-6486");

		$practice = new Practices();
$practice->setPractice("Keith Zacher, MD")->setAddress1("3501 N. Scottsdale Road")->setAddress2("Suite 140")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48898")->setLongitude("-111.92584")->setPhone("(480) 772-2453");

		$practice = new Practices();
$practice->setPractice("Kids Connection Pediatrics")->setAddress1("3815 East Bell Road")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.63850")->setLongitude("-111.99909")->setPhone("(623) 466-7469");

		$practice = new Practices();
$practice->setPractice("Laurie Farricielli M.D.")->setAddress1("8560 E. Shea Blvd.")->setAddress2("Ste. 130")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58255")->setLongitude("-111.89654")->setPhone("(480) 860-0935");

		$practice = new Practices();
$practice->setPractice("Lifescape Medical Associates")->setAddress1("8757 E. Bell Rd.")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.63978")->setLongitude("-111.89379")->setPhone("(480) 860-5500");

		$practice = new Practices();
$practice->setPractice("McDowell Mountain Gynecology")->setAddress1("5620 E. Bell Rd.")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.64081")->setLongitude("-111.95928")->setPhone("(602) 493-9361");

		$practice = new Practices();
$practice->setPractice("Medcubed PLLC")->setAddress1("7699 E. Pinnacle Peak Rd.")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.69455")->setLongitude("-111.91607")->setPhone("(480) 300-4663");

		$practice = new Practices();
$practice->setPractice("Najma Usmani M.D.")->setAddress1("7331 E. Osborn Road")->setAddress2("Ste. 205")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48764")->setLongitude("-111.92426")->setPhone("(480) 994-9838");

		$practice = new Practices();
$practice->setPractice("Neighborhood Outreach Access for Health Scottsdale Healthcare")->setAddress1("11130 E. Cholla St")->setAddress2("Building I")->setCity("Scottsdale")->setState("AZ")->setZip("85259")->setLatitude("33.58780")->setLongitude("-111.83992")->setPhone("(480) 882-7520");

		$practice = new Practices();
$practice->setPractice("Neighborhood Outreach Access for Health Scottsdale Healthcare")->setAddress1("1300 N 48th St.")->setCity("Phoenix")->setState("AZ")->setZip("85008")->setLatitude("33.46215")->setLongitude("-111.98155")->setPhone("(602) 845-4201");

		$practice = new Practices();
$practice->setPractice("Neighborhood Outreach Access for Health Scottsdale Healthcare")->setAddress1("15833 N 29th Street")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.63231");$practice->("-112.01920")->setPhone("(602) 449-2811");

		$practice = new Practices();
$practice->setPractice("NKL Neurology")->setAddress1("9817 N. 95th St.")->setAddress2("Ste. 110")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57561")->setLongitude("-111.87557")->setPhone("(480) 779-3997");

		$practice = new Practices();
$practice->setPractice("NOAH-Heuser Family Medicine Center Scottsdale Healthcare")->setAddress1("7301 E. 2nd St.")->setAddress2("Ste. 210")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.49105")->setLongitude("-111.92413")->setPhone("(480) 882-4545");

		$practice = new Practices();
$practice->setPractice("North Scottsdale Center for Oral and Maxillofacial Surgery")->setAddress1("34225 N. 27th Dr.")->setAddress2("Building 4")->setCity("Phoenix")->setState("AZ")->setZip("85085")->setLatitude("33.79595");$practice->("-112.11720")->setPhone("(623) 581-5198");

		$practice = new Practices();
$practice->setPractice("North Scottsdale Center for Oral and Maxillofacial Surgery")->setAddress1("6945 E. Sahuaro Dr.")->setAddress2("Ste. A-1")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.58389")->setLongitude("-111.93165",null,NOW()),

		$practice = new Practices();
$practice->setPractice("North Scottsdale Family Medicine")->setAddress1("6501 E. Greenway Pkwy.")->setAddress2("Ste. 160")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.62496")->setLongitude("-111.94189")->setPhone("(480) 948-9903");

		$practice = new Practices();
$practice->setPractice("North Scottsdale Women's Health")->setAddress1("9745 North 90th Place")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57371")->setLongitude("-111.88503")->setPhone("(480) 661-1485");

		$practice = new Practices();
$practice->setPractice("North Valley Neurology and Sleep")->setAddress1("14418 W Meeker Road")->setAddress2("Bldg B, Suite 200");$practice->("Sun City West")->setState("AZ")->setZip("85375")->setLatitude("33.65968");$practice->("-112.36998")->setPhone("(602) 482-2116");

		$practice = new Practices();
$practice->setPractice("North Valley Neurology and Sleep")->setAddress1("16222 N 159th Ave")->setAddress2("Ste A100")->setCity("Glendale")->setState("AZ")->setZip("85306")->setLatitude("33.61626");$practice->("-112.40256")->setPhone("(602) 482-2116");

		$practice = new Practices();
$practice->setPractice("North Valley Neurology and Sleep")->setAddress1("3815 E Bell Road")->setAddress2("Ste 2400")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.63850")->setLongitude("-111.99909")->setPhone("(602) 482-2116");

		$practice = new Practices();
$practice->setPractice("Oasis Plastic Surgery, PLLC")->setAddress1("9590 E. Ironwood Square Dr.")->setAddress2("Suite 108")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57849")->setLongitude("-111.87495")->setPhone("(480) 264-6428");

		$practice = new Practices();
$practice->setPractice("Ortho Arizona/John K. Bradway, M.D.")->setAddress1("10213 N. 92nd St.")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57857")->setLongitude("-111.87874")->setPhone("(480) 860-6005");

		$practice = new Practices();
$practice->setPractice("OrthoArizona Center for Spinal Disorders")->setAddress1("3133 E. Camelback Road")->setAddress2("Suite 245")->setCity("Scottsdale")->setState("AZ")->setZip("85016")->setLatitude("33.50216")->setLongitude("-111.93899")->setPhone("(602) 253-7000");

		$practice = new Practices();
$practice->setPractice("OrthoArizona Phoenix Orthopedic Consultants")->setAddress1("18699 North 67th Ave")->setAddress2("Suite 120")->setCity("Glendale")->setState("AZ")->setZip("85308")->setLatitude("33.65462");$practice->("-112.20224")->setPhone("(602) 398-8888");

		$practice = new Practices();
$practice->setPractice("OrthoArizona Phoenix Orthopedic Consultants")->setAddress1("19636 North 27th Ave")->setAddress2("Suite 401")->setCity("Phoenix")->setState("AZ")->setZip("85308")->setLatitude("33.66478");$practice->("-112.11790")->setPhone("(602) 398-8888");

		$practice = new Practices();
$practice->setPractice("OrthoArizona Phoenix Orthopedic Consultants")->setAddress1("5620 E. Bell Rd.")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.64081")->setLongitude("-111.95928")->setPhone("(602) 493-9361");

		$practice = new Practices();
$practice->setPractice("Palo Verde Hematology Oncology")->setAddress1("1661 East Camelback Rd.")->setAddress2("Suite 375")->setCity("Phoenix")->setState("AZ")->setZip("85016")->setLatitude("33.50698");$practice->("-112.04547")->setPhone("(602) 258-4875");

		$practice = new Practices();
$practice->setPractice("Palo Verde Hematology Oncology")->setAddress1("19841 N 27th Ave.")->setAddress2("Suite 103")->setCity("Phoenix")->setState("AZ")->setZip("85027")->setLatitude("33.66707");$practice->("-112.11581")->setPhone("(480) 941-1211");

		$practice = new Practices();
$practice->setPractice("Palo Verde Hematology Oncology")->setAddress1("5601 W Eugie Ave")->setAddress2("Suite 106")->setCity("Glendale")->setState("AZ")->setZip("85304")->setLatitude("33.60672");$practice->("-112.18093")->setPhone("(602) 978-6255");

		$practice = new Practices();
$practice->setPractice("Palo Verde Hematology Oncology")->setAddress1("7373 N Scottsdale RD")->setAddress2("Building E-100")->setCity("Scottsdale")->setState("AZ")->setZip("85032")->setLatitude("33.54489")->setLongitude("-111.92509")->setPhone("(480) 941-1211");

		$practice = new Practices();
$practice->setPractice("Palo Verde Hematology Oncology")->setAddress1("7373 N Scottsdale Road")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.54489")->setLongitude("-111.92509")->setPhone("(480) 941-1211");

		$practice = new Practices();
$practice->setPractice("Palo Verde Hematology Oncology")->setAddress1("807 South Ponderosa")->setCity("Payson")->setState("AZ")->setZip("85541");$practice->("34.23184")->setLongitude("-111.32130")->setPhone("(602) 258-4875");

		$practice = new Practices();
$practice->setPractice("Palo Verde Hematology Oncology")->setAddress1("9250 W Thomas Rd.")->setAddress2("Suite 150")->setCity("Phoenix")->setState("AZ")->setZip("85037")->setLatitude("33.48038");$practice->("-112.25896")->setPhone("(602) 978-6255");

		$practice = new Practices();
$practice->setPractice("Paradise Valley Allergy Associates Ltd")->setAddress1("20940 N. Tatum Blvd.")->setAddress2("Ste. 205")->setCity("Phoenix")->setState("AZ")->setZip("85050")->setLatitude("33.67568")->setLongitude("-111.97936")->setPhone("(480) 991-1930");

		$practice = new Practices();
$practice->setPractice("Paul M. Francis, MD")->setAddress1("8412 E Shea Boulevard")->setAddress2("Suite 100")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58246")->setLongitude("-111.87362")->setPhone("(480) 614-2500");

		$practice = new Practices();
$practice->setPractice("Peter J Ferrara, MD PC")->setAddress1("3604 North Wells Fargo")->setAddress2("Suite L")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48981")->setLongitude("-111.92355")->setPhone("(480) 947-7401");

		$practice = new Practices();
$practice->setPractice("Peter W. Mitchell M.D.")->setAddress1("2222 E. Highland Ave.")->setAddress2("Ste. 425")->setCity("Phoenix")->setState("AZ")->setZip("85016")->setLatitude("33.50634");$practice->("-112.03388")->setPhone("(602) 667-6640");

		$practice = new Practices();
$practice->setPractice("Phoenix Eye Group")->setAddress1("10250 N 92nd Street")->setAddress2("Ste 105")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58090")->setLongitude("-111.88242")->setPhone("(602) 888-4466");

		$practice = new Practices();
$practice->setPractice("Phoenix Orthopedic Consultants")->setAddress1("18699 North 67th Ave")->setAddress2("Suite 120")->setCity("Glendale")->setState("AZ")->setZip("85308")->setLatitude("33.65462");$practice->("-112.20224")->setPhone("(602) 298-8888");

		$practice = new Practices();
$practice->setPractice("Phoenix Orthopedic Consultants")->setAddress1("19636 N 27th Ave")->setAddress2("Suite 401")->setCity("Phoenix")->setState("AZ")->setZip("85027")->setLatitude("33.66478");$practice->("-112.11790")->setPhone("(602) 298-8888");

		$practice = new Practices();
$practice->setPractice("Phoenix Orthopedic Consultants")->setAddress1("20401 N. 73rd St.")->setAddress2("Ste. 255")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.67300")->setLongitude("-111.92368")->setPhone("(602) 298-8888");

		$practice = new Practices();
$practice->setPractice("Phoenix Orthopedic Group")->setAddress1("2222 E. Highland Ave.")->setAddress2("Ste. 203")->setCity("Phoenix")->setState("AZ")->setZip("85016")->setLatitude("33.50634");$practice->("-112.03388")->setPhone("(602) 277-1558");

		$practice = new Practices();
$practice->setPractice("Phoenix Orthopedic Group")->setAddress1("9941 N. 95th St.")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57693")->setLongitude("-111.87578")->setPhone("(602) 277-1558");

		$practice = new Practices();
$practice->setPractice("Pinnacle Internal Medicine and Headache Care")->setAddress1("2915 West Rose Garden Lane")->setAddress2("Ste 102")->setCity("Phoenix")->setState("AZ")->setZip("85027")->setLatitude("33.67618");$practice->("-112.12054")->setPhone("(623) 748-8300");

		$practice = new Practices();
$practice->setPractice("Pinnacle Oncology Hematology");$practice->("9055 E. Del Camino Dr.")->setAddress2("Ste. 100")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.55548")->setLongitude("-111.88692")->setPhone("(480) 922-4600");

		$practice = new Practices();
$practice->setPractice("Pulmonary Clinics of Scottsdale, PLLC");$practice->("10250 N 92nd Street")->setAddress2("Suite 300")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58047")->setLongitude("-111.88277")->setPhone("(480) 970-9649");

		$practice = new Practices();
$practice->setPractice("QuestMedicine")->setAddress1("3301 N. Miller Rd.")->setAddress2("Ste. 160")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48638")->setLongitude("-111.91711")->setPhone("(480) 990-7200");

		$practice = new Practices();
$practice->setPractice("Radiation Oncologists of Central Arizona & Phoenix Cyberknife");$practice->("4611 E. Shea Blvd.")->setAddress2("Ste. 120")->setCity("Phoenix")->setState("AZ")->setZip("85028")->setLatitude("33.58236")->setLongitude("-111.98187")->setPhone("(602) 441-3845");

		$practice = new Practices();
$practice->setPractice("Reddy GI Associates");$practice->("1810 S Crimson Road")->setAddress2("Ste. 191")->setCity("Mesa")->setState("AZ")->setZip("85209")->setLatitude("33.38303")->setLongitude("-111.61839")->setPhone("(480) 393-0575");

		$practice = new Practices();
$practice->setPractice("Reddy GI Associates");$practice->("595 N. Dobson Road")->setAddress2("Ste. A15")->setCity("Chandler")->setState("AZ")->setZip("85224")->setLatitude("33.31300")->setLongitude("-111.87508")->setPhone("(480) 393-0575");

		$practice = new Practices();
$practice->setPractice("Richard J Brown MD, PLLC");$practice->("11000 N. Scottsdale Road")->setAddress2("Suite 130")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.58693")->setLongitude("-111.92674")->setPhone("(480) 947-2455");

		$practice = new Practices();
$practice->setPractice("Richard S. Levinson M.D.");$practice->("7331 E. Osborn Road")->setAddress2("Ste. 205")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48764")->setLongitude("-111.92426")->setPhone("(480) 994-9838");

		$practice = new Practices();
$practice->setPractice("Rimma Finkel M.D.");$practice->("1727 W. Frye Rd.")->setAddress2("Ste. 250")->setCity("Chandler")->setState("AZ")->setZip("85224")->setLatitude("33.29790")->setLongitude("-111.87059")->setPhone("(480) 963-3034");

		$practice = new Practices();
$practice->setPractice("Rimma Finkel M.D.");$practice->("3615 S Rome Rd.")->setCity("Gilbert")->setState("AZ")->setZip("85297")->setLatitude("33.28479")->setLongitude("-111.75129")->setPhone("(480) 963-7019");

		$practice = new Practices();
$practice->setPractice("Rimma Finkel M.D.");$practice->("3815 E. Bell Rd.")->setAddress2("Ste. 2200")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.63850")->setLongitude("-111.99909")->setPhone("(602) 931-4684");

		$practice = new Practices();
$practice->setPractice("Scottsdale Cardiovascular Center");$practice->("10250 N 92nd Street")->setAddress2("Suite 202")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58047")->setLongitude("-111.88277")->setPhone("(480) 945-3535");

		$practice = new Practices();
$practice->setPractice("Scottsdale Cardiovascular Center");$practice->("3099 Civic Center Plaza")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.58047")->setLongitude("-111.88277")->setPhone("(480) 945-3535");

		$practice = new Practices();
$practice->setPractice("Scottsdale Center for Urology");$practice->("10301 North 92nd Street")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57954")->setLongitude("-111.88126")->setPhone("(480) 272-6400");

		$practice = new Practices();
$practice->setPractice("Scottsdale Center for Women's Health");$practice->("8415 N. Pima Road")->setAddress2("Suite 210")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.55709")->setLongitude("-111.89074")->setPhone("(480) 425-8700");

		$practice = new Practices();
$practice->setPractice("Scottsdale Critical Care");$practice->("7449 E. Osborn Rd.")->setAddress2("Ste. 7")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48725")->setLongitude("-111.92066")->setPhone("(480) 947-1130");

		$practice = new Practices();
$practice->setPractice("Scottsdale CVT Surgeons");$practice->("7301 E. 2nd St.")->setAddress2("Ste. 310")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.49105")->setLongitude("-111.92413")->setPhone("(480) 947-7738");

		$practice = new Practices();
$practice->setPractice("Scottsdale Emergency Associates");$practice->("7400 E. Osborn Rd.")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48867")->setLongitude("-111.92315")->setPhone("(480) 882-4809");

		$practice = new Practices();
$practice->setPractice("Scottsdale Facial & Oral Surgery");$practice->("3501 N Scottsdale Rd")->setAddress2("Ste. 110")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.61404")->setLongitude("-111.92588")->setPhone("(480) 945-0663");

		$practice = new Practices();
$practice->setPractice("Scottsdale Family Physicians");$practice->("9755 North 90th Street")->setAddress2("Ste. C200")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57460")->setLongitude("-111.88569")->setPhone("(480) 661-1755");

		$practice = new Practices();
$practice->setPractice("Scottsdale Gastroenterology Associates")->setLatitude("3301 N Miller Road")->setAddress2("Ste 138")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48638")->setLongitude("-111.91711")->setPhone("(480) 646-8444");

		$practice = new Practices();
$practice->setPractice("Scottsdale Internal Medicine");$practice->("8520 E. Shea Blvd.")->setAddress2("Ste. 100")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58246")->setLongitude("-111.87362")->setPhone("(480) 588-6924");

		$practice = new Practices();
$practice->setPractice("Scottsdale Joint Center");$practice->("7301 E. 2nd St.")->setAddress2("Ste. 102")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.49105")->setLongitude("-111.92413")->setPhone("(480) 994-1149");

		$practice = new Practices();
$practice->setPractice("Scottsdale Medical Associates");$practice->("7331 E. Osborn Road")->setAddress2("Ste. 205")->setCity("Scottsdale")->setState("AZ")->setZip("85259")->setLatitude("33.48764")->setLongitude("-111.92426")->setPhone("(480) 994-9838");

		$practice = new Practices();
$practice->setPractice("Scottsdale Medical Center");$practice->("10117 N. 92nd St.")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57821")->setLongitude("-111.88016")->setPhone("(480) 614-5808");

		$practice = new Practices();
$practice->setPractice("Scottsdale Medical Imaging, Ltd. ");$practice->("10290 N. 92nd St.")->setAddress2("Ste. 100")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58024")->setLongitude("-111.88379")->setPhone("(480) 425-5000");

		$practice = new Practices();
$practice->setPractice("Scottsdale Medical Imaging, Ltd. ");$practice->("10575 N. Tatum Blvd.")->setAddress2("Ste. C-128")->setCity("Paradise Valley")->setState("AZ")->setZip("85253")->setLatitude("33.58175")->setLongitude("-111.97715")->setPhone("(480) 425-5000");

		$practice = new Practices();
$practice->setPractice("Scottsdale Medical Imaging, Ltd. ");$practice->("16838 E. Palisades Blvd.")->setAddress2("Ste C-151")->setCity("Fountain Hills")->setState("AZ")->setZip("85268")->setLatitude("33.60797")->setLongitude("-111.71666")->setPhone("(480) 425-5000");

		$practice = new Practices();
$practice->setPractice("Scottsdale Medical Imaging, Ltd. ");$practice->("20201 N. Scottsdale Healthcare Dr.")->setAddress2("Ste. 190")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.67102")->setLongitude("-111.92038")->setPhone("(480) 425-5000");

		$practice = new Practices();
$practice->setPractice("Scottsdale Medical Imaging, Ltd. ");$practice->("2222 E. Highland Ave.")->setAddress2("Ste. 120")->setCity("Phoenix")->setState("AZ")->setZip("85016")->setLatitude("33.50634");$practice->("-112.03388")->setPhone("(480) 425-5000");

		$practice = new Practices();
$practice->setPractice("Scottsdale Medical Imaging, Ltd. ")->setAddress1("33755 N. Scottsdale Rd")->setAddress2("Ste. 120")->setCity("Scottsdale")->setState("AZ")->setZip("85262")->setLatitude("33.79924")->setLongitude("-111.92803")->setPhone("(480) 425-5000");

		$practice = new Practices();
$practice->setPractice("Scottsdale Medical Imaging, Ltd. ");$practice->("3501 N. Scottsdale Rd.")->setAddress2("Ste. 130")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48898")->setLongitude("-111.92584")->setPhone("(480) 425-5000");

		$practice = new Practices();
$practice->setPractice("Scottsdale Medical Imaging, Ltd. ");$practice->("3645 S. Rome St.")->setAddress2("Ste. 101");$practice->("Gilbert")->setState("AZ")->setZip("85297")->setLatitude("33.28478")->setLongitude("-111.75031")->setPhone("(480) 425-5000");

		$practice = new Practices();
$practice->setPractice("Scottsdale Medical Imaging, Ltd. ");$practice->("6501 E. Greenway Parkway")->setAddress2("Ste. 160")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.62496")->setLongitude("-111.94189")->setPhone("(480) 425-5000");

		$practice = new Practices();
$practice->setPractice("Scottsdale Medical Imaging, Ltd. ");$practice->("7301 E 2nd Street")->setAddress2("Ste. 112 & 114")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.49105")->setLongitude("-111.92413")->setPhone("(480) 425-5000");

		$practice = new Practices();
$practice->setPractice("Scottsdale Medical Imaging, Ltd. ");$practice->("7331 E. Osborn Road")->setAddress2("Ste. 140")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48764")->setLongitude("-111.92426")->setPhone("(480) 425-5000");

		$practice = new Practices();
$practice->setPractice("Scottsdale Medical Imaging, Ltd. ");$practice->("9003 E. Shea Blvd.")->setAddress2("Ste. PET/Open MRI")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.61603")->setLongitude("-111.89263")->setPhone("(480) 425-5000");

		$practice = new Practices();
$practice->setPractice("Scottsdale Medical Imaging, Ltd. ");$practice->("9220 E. Mountain View Rd.")->setAddress2("Ste. 100")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57633")->setLongitude("-111.87978")->setPhone("(480) 425-5000");

		$practice = new Practices();
$practice->setPractice("Scottsdale Medical Imaging, Ltd. ");$practice->("9700 N. 91st St.")->setAddress2("Ste. B-110")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57369")->setLongitude("-111.88347")->setPhone("(480) 425-5000");

		$practice = new Practices();
$practice->setPractice("Scottsdale Obstetrics and Gynecology");$practice->("7331 E. Osborn Road")->setAddress2("Ste. 305")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48764")->setLongitude("-111.92426")->setPhone("(480) 945-4849");

		$practice = new Practices();
$practice->setPractice("Scottsdale Pathology Associates");$practice->("9003 E. Shea Blvd.")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58095")->setLongitude("-111.88525")->setPhone("(480) 323-3383");

		$practice = new Practices();
$practice->setPractice("Scottsdale Pediatric Center")->setAddress1("10752 N. 89th Place")->setAddress2("Ste. 126")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58440")->setLongitude("-111.88840")->setPhone("(480) 860-1161");

		$practice = new Practices();
$practice->setPractice("Scottsdale Perinatal Associates");$practice->("6950 E. Chauncey Ln.")->setAddress2("Ste. 150")->setCity("Phoenix")->setState("AZ")->setZip("85054")->setLatitude("33.65210")->setLongitude("-111.93070")->setPhone("(480) 970-7664");

		$practice = new Practices();
$practice->setPractice("Scottsdale Physicians Group");$practice->("8328 E. Hartford Drive")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.64286")->setLongitude("-111.89970")->setPhone("(480) 214-9720");

		$practice = new Practices();
$practice->setPractice("Scottsdale Primary Care");$practice->("10900 N. Scottsdale Road")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.58658")->setLongitude("-111.92670")->setPhone("(480) 607-3800");

		$practice = new Practices();
$practice->setPractice("Scottsdale Primary Care");$practice->("7543 East 2nd Street")->setAddress2("Suite 101")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.49128")->setLongitude("-111.91820")->setPhone("(480) 607-3800");

		$practice = new Practices();
$practice->setPractice("Scottsdale Sports Medicine Institute LLC");$practice->("10133 North 92nd Street")->setAddress2("#102")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57821")->setLongitude("-111.87951")->setPhone("(480) 664-4615");

		$practice = new Practices();
$practice->setPractice("Scottsdale Surgical Consultants");$practice->("3501 N. Scottsdale Rd.")->setAddress2("Ste. 234")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48898")->setLongitude("-111.92584")->setPhone("(480) 421-1991");

		$practice = new Practices();
$practice->setPractice("Scottsdale Urologic Surgeons");$practice->("10210 N. 92nd St.")->setAddress2("Ste. 100")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57927")->setLongitude("-111.88255")->setPhone("(480) 949-1212");

		$practice = new Practices();
$practice->setPractice("Scottsdale Urologic Surgeons");$practice->("7301 E. 2nd St.")->setAddress2("Ste. 308")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.49105")->setLongitude("-111.92413")->setPhone("(480) 860-6486");

		$practice = new Practices();
$practice->setPractice("Scottsdale Women's Care");$practice->("7301 E. 2nd St.")->setAddress2("Ste. 310")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.49105")->setLongitude("-111.92413")->setPhone("(480) 947-8090");

		$practice = new Practices();
$practice->setPractice("Shree Physicians");$practice->("8404 E. Shea Blvd.")->setAddress2("Ste. 100")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58246")->setLongitude("-111.87362")->setPhone("(480) 584-5959");

		$practice = new Practices();
$practice->setPractice("Sonoran Consultants in OB/GYN");$practice->("9500 E. Ironwood Square Dr.")->setAddress2("Ste. 124")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57847")->setLongitude("-111.87626")->setPhone("(480) 860-0550");

		$practice = new Practices();
$practice->setPractice("Sonoran Foot Specialist, PLLC");$practice->("9767 North 91st Street")->setAddress2("Suite 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57394")->setLongitude("-111.88239")->setPhone("(480) 629-5903");

		$practice = new Practices();
$practice->setPractice("Sonoran Hip Center");$practice->("7400 E. Thompson Peak Pkwy.")->setAddress2("Ste. 240")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.67069")->setLongitude("-111.92203")->setPhone("(480) 398-4624");

		$practice = new Practices();
$practice->setPractice("Sonoran Orthopedic Trauma Surgeons");$practice->("3126 N. Civic Center Plaza")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48420")->setLongitude("-111.92208")->setPhone("(480) 874-2040");

		$practice = new Practices();
$practice->setPractice("Southwest Heart and Lung");$practice->("10930 N. Tatum Blvd.")->setAddress2("Ste. 103")->setCity("Phoenix")->setState("AZ")->setZip("85028")->setLatitude("33.58595")->setLongitude("-111.97831")->setPhone("(602) 263-7600");

		$practice = new Practices();
$practice->setPractice("Southwest Kidney Institute");$practice->("16838 E. Palisades Blvd.")->setCity("Fountain Hills")->setState("AZ")->setZip("85268")->setLatitude("33.60797")->setLongitude("-111.71666")->setPhone("(480) 610-6100");

		$practice = new Practices();
$practice->setPractice("Southwest Kidney Institute")->setLatitude("337 E. Coronado Rd.")->setAddress2("Ste. 201")->setCity("Phoenix")->setState("AZ")->setZip("85004")->setLatitude("33.46705");$practice->("-112.06764")->setPhone("(480) 610-6100");

		$practice = new Practices();
$practice->setPractice("Southwest Kidney Institute");$practice->("9746 N. 90th Pl.")->setAddress2("Ste. 205")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57391")->setLongitude("-111.88565")->setPhone("(480) 610-6100");

		$practice = new Practices();
$practice->setPractice("Specialty Orthopedic Surgery");$practice->("9700 N. 91st St.")->setAddress2("Ste. B108")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57369")->setLongitude("-111.88347")->setPhone("(602) 466-7378");

		$practice = new Practices();
$practice->setPractice("Spectrum Dermatology");$practice->("20950 N. Tatum Blvd.")->setAddress2("Suite 250")->setCity("Phoenix")->setState("AZ")->setZip("85050")->setLatitude("33.67619")->setLongitude("-111.97836")->setPhone("(480) 948-8400");

		$practice = new Practices();
$practice->setPractice("Spectrum Dermatology");$practice->("4350 E Camelback Rd.")->setAddress2("Suite A200")->setCity("Phoenix")->setState("AZ")->setZip("85018")->setLatitude("33.51007")->setLongitude("-111.98784")->setPhone("(480) 948-8400");

		$practice = new Practices();
$practice->setPractice("Spectrum Dermatology");$practice->("7425 E. Shea Blvd.")->setAddress2("Ste. 110")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58177")->setLongitude("-111.92134")->setPhone("(480) 948-8400");

		$practice = new Practices();
$practice->setPractice("Spine and Orthopedic Specialists");$practice->("16838 E. Palisades Blvd.")->setAddress2("Ste. C-153")->setCity("Fountain Hills")->setState("AZ")->setZip("85268")->setLatitude("33.60797")->setLongitude("-111.71666")->setPhone("(480) 353-0446");

		$practice = new Practices();
$practice->setPractice("Spine and Orthopedic Specialists");$practice->("20401 N. 73rd St.")->setAddress2("Ste. 175")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.67300")->setLongitude("-111.92368")->setPhone("(480) 353-0446");

		$practice = new Practices();
$practice->setPractice("Spine Institute of Arizona");$practice->("16515 South 40th Street")->setAddress2("Suite 119")->setCity("Phoenix")->setState("AZ")->setZip("85048")->setLatitude("33.29721")->setLongitude("-111.99617")->setPhone("(602) 953-9500");

		$practice = new Practices();
$practice->setPractice("Spine Institute of Arizona");$practice->("18700 North 64th Drive")->setAddress2("Suite 202")->setCity("Glendale")->setState("AZ")->setZip("85308")->setLatitude("33.65519");$practice->("-112.20053")->setPhone("(602) 952-9500");

		$practice = new Practices();
$practice->setPractice("Spine Institute of Arizona");$practice->("3483 South Mercy Road")->setAddress2("Suite 102");$practice->("Gilbert")->setState("AZ")->setZip("85297")->setLatitude("33.28603")->setLongitude("-111.74939")->setPhone("(602) 953-9500");

		$practice = new Practices();
$practice->setPractice("Spine Institute of Arizona");$practice->("9735 North 90th Place")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57329")->setLongitude("-111.88601")->setPhone("(602) 953-9500");

		$practice = new Practices();
$practice->setPractice("Stephen R. Rosenthal M.D.")->setAddress1("10210 N. 92nd St.")->setAddress2("Ste. 103")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57927")->setLongitude("-111.88255")->setPhone("(480) 661-4200");

		$practice = new Practices();
$practice->setPractice("Steven H. Turkeltaub, MD, PC");$practice->("10290 N. 92nd Street")->setAddress2("Suite 207")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58024")->setLongitude("-111.88379")->setPhone("(480) 451-3000");

		$practice = new Practices();
$practice->setPractice("Steven H. Turkeltaub, MD, PC");$practice->("18275 N. 59th Avenue")->setAddress2("Suite E-126")->setCity("Glendale")->setState("AZ")->setZip("85308")->setLatitude("33.65155");$practice->("-112.18612")->setPhone("(480) 451-3000");

		$practice = new Practices();
		$practice->setPractice("Stonecreek Medical Associates");$practice->("11209 N. Tatum Blvd.")->setAddress2("Ste. 175")->setCity("Phoenix")->setState("AZ")->setZip("85028")->setLatitude("33.58820")->setLongitude("-111.97649")->setPhone("(602) 652-8900");

		$practice = new Practices();
		$practice->setPractice("Talus in Motion");$practice->("5111 N. Scottsdale Rd.")->setAddress2("Suite 101")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.49364")->setLongitude("-111.92628")->setPhone("(480) 994-3668");

		$practice = new Practices();
		$practice->setPractice("Tara Brodkin M.D.");$practice->("9070 E. Desert Cove Ave.")->setAddress2("Ste. 102")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58561")->setLongitude("-111.88497")->setPhone("(480) 860-2322");

		$practice = new Practices();
		$practice->setPractice("Tatum Highlands Medical Associates");$practice->("26224 N. Tatum Blvd.")->setAddress2("Ste. 15A")->setCity("Phoenix")->setState("AZ")->setZip("85050")->setLatitude("33.72520")->setLongitude("-111.97795")->setPhone("(480) 663-9632");

		$practice = new Practices();
		$practice->setPractice("Tatum Internal Medicine and Associates");$practice->("4729 E Union Hills Dr.")->setAddress2("Ste. 111")->setCity("Phoenix")->setState("AZ")->setZip("85050")->setLatitude("33.65445")->setLongitude("-111.98035")->setPhone("(602) 482-5444");

		$practice = new Practices();
		$practice->setPractice("The Heart Clinic PC");$practice->("10293 North 92nd Street")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57900")->setLongitude("-111.87944")->setPhone("(480) 747-6535");

		$practice = new Practices();
		$practice->setPractice("The Heart Clinic PC");$practice->("36889 North Tom Darlington Drive")->setCity("Carefree")->setState("AZ")->setZip("85377")->setLatitude("33.82086")->setLongitude("-111.92416")->setPhone("(480) 488-9220");

		$practice = new Practices();
		$practice->setPractice("The Insomnia and Sleep Institute of Arizona");$practice->("8330 E. Hartford Drive")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.64277")->setLongitude("-111.90017")->setPhone("(480) 745-3547");

		$practice = new Practices();
		$practice->setPractice("The Pediatric Endocrine and Diabetes Clinic, PC")->setLatitude("333 West Thomas Road")->setAddress2("Suite 201")->setCity("Phoenix")->setState("AZ")->setZip("85013")->setLatitude("33.48003");$practice->("-112.07895")->setPhone("(602) 277-1117");

		$practice = new Practices();
		$practice->setPractice("The Pediatric Endocrine and Diabetes Clinic, PC");$practice->("7010 East Chauncey Lane")->setAddress2("Suite 210")->setCity("Phoenix")->setState("AZ")->setZip("85054")->setLatitude("33.65186")->setLongitude("-111.92970")->setPhone("(602) 277-1117");

		$practice = new Practices();
		$practice->setPractice("The Pediatric Endocrine and Diabetes Clinic, PC");$practice->("9250 West Thomas Road")->setAddress2("Suite 150")->setCity("Phoenix")->setState("AZ")->setZip("85037")->setLatitude("33.48038");$practice->("-112.25896")->setPhone("(602) 277-1117");

		$practice = new Practices();
		$practice->setPractice("Urology Associates");$practice->("10301 North 92nd Street")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57954")->setLongitude("-111.88126")->setPhone("(480) 661-2662");

		$practice = new Practices();
		$practice->setPractice("Urology Associates");$practice->("1313 East Osborne Road")->setAddress2("Ste. B150")->setCity("Phoenix")->setState("AZ")->setZip("85014")->setLatitude("33.48700");$practice->("-112.05408")->setPhone("(602) 264-4431");

		$practice = new Practices();
		$practice->setPractice("Valley Anesthesiology Consultants");$practice->("1850 N. Central Ave.")->setAddress2("Ste. 1600")->setCity("Phoenix")->setState("AZ")->setZip("85004")->setLatitude("33.46855");$practice->("-112.07508")->setPhone("(602) 262-8916");

		$practice = new Practices();
		$practice->setPractice("Valley ENT, PC");$practice->("18700 North 64th Drive")->setAddress2("Suite 201")->setCity("Glendale")->setState("AZ")->setZip("85308")->setLatitude("33.65519");$practice->("-112.20053")->setPhone("(623) 566-4718");

		$practice = new Practices();
		$practice->setPractice("Valley ENT, PC");$practice->("20201 North Scottsdale Healthcare Drive")->setAddress2("Suite 230")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.67102")->setLongitude("-111.92038")->setPhone("(480) 513-0336");

		$practice = new Practices();
		$practice->setPractice("Valley ENT, PC");$practice->("2058 South Dobson Road")->setAddress2("Suite 10")->setCity("Mesa")->setState("AZ")->setZip("85202")->setLatitude("33.37702")->setLongitude("-111.87933")->setPhone("(480) 614-0499");

		$practice = new Practices();
		$practice->setPractice("Valley ENT, PC");$practice->("3501 North Scottsdale Road")->setAddress2("Suite 160")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48898")->setLongitude("-111.92584")->setPhone("(480) 273-8448");

		$practice = new Practices();
		$practice->setPractice("Valley ENT, PC");$practice->("8952 East Desert Cove Ave.")->setAddress2("Suite 205")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58560")->setLongitude("-111.88839")->setPhone("(480) 273-8688");

		$practice = new Practices();
		$practice->setPractice("Valley ENT, PC");$practice->("9097 East Desert Cove Ave.")->setAddress2("Suite 260")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58481")->setLongitude("-111.88463")->setPhone("(480) 614-0499");

		$practice = new Practices();
		$practice->setPractice("Valley Integrated Pain, PLLC");$practice->("3501 North Scottsdale Road")->setAddress2("Suite 221")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48898")->setLongitude("-111.92584")->setPhone("(480) 422-8510");

		$practice = new Practices();
		$practice->setPractice("Valley Integrated Pain, PLLC");$practice->("9977 North 90th Street")->setAddress2("Suite 240")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57556")->setLongitude("-111.88532")->setPhone("(480) 422-8510");

		$practice = new Practices();
		$practice->setPractice("Valley OB/GYN Associates");$practice->("3501 N. Scottsdale Rd.")->setAddress2("Ste. 280")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48898")->setLongitude("-111.92584")->setPhone("(480) 945-6583");

		$practice = new Practices();
		$practice->setPractice("Valley Pain Consultants");$practice->("10200 North 92nd Street")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57833")->setLongitude("-111.88141")->setPhone("(480) 889-0255");

		$practice = new Practices();
		$practice->setPractice("Valley Pain Consultants");$practice->("1331 North 7th Street")->setAddress2("Ste 355")->setCity("Phoenix")->setState("AZ")->setZip("85006")->setLatitude("33.46335");$practice->("-112.06405")->setPhone("(480) 991-3005");

		$practice = new Practices();
		$practice->setPractice("Valley Pain Consultants");$practice->("2095 West Pecos Road")->setAddress2("Ste A8")->setCity("Chandler")->setState("AZ")->setZip("85224")->setLatitude("33.29061")->setLongitude("-111.87809")->setPhone("(480) 889-0255");

		$practice = new Practices();
		$practice->setPractice("Valley Pain Consultants")->setAddress1("3301 North Miller Road")->setAddress2("Ste 120")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48638")->setLongitude("-111.91711")->setPhone("(480) 889-0255");

		$practice = new Practices();
		$practice->setPractice("Valley Pain Consultants");$practice->("3483 South Mercy Road")->setAddress2("Ste 102");$practice->("Gilbert")->setState("AZ")->setZip("85297")->setLatitude("33.28603")->setLongitude("-111.74939")->setPhone("(480) 889-0255");

		$practice = new Practices();
		$practice->setPractice("Valley Pain Consultants");$practice->("5425 East Bell Road")->setAddress2("Ste 115")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.64002")->setLongitude("-111.96407")->setPhone("(480) 991-3005");

		$practice = new Practices();
		$practice->setPractice("Valley Pain Consultants");$practice->("6780 West Thunderbird Road")->setAddress2("Ste A105")->setCity("Peoria")->setState("AZ")->setZip("85381")->setLatitude("33.61104");$practice->("-112.20499")->setPhone("(602) 242-5040");

		$practice = new Practices();
		$practice->setPractice("Valley Pain Consultants");$practice->("9305 West Thomas Road")->setAddress2("Ste 500")->setCity("Phoenix")->setState("AZ")->setZip("85037")->setLatitude("33.47800");$practice->("-112.26038")->setPhone("(602) 242-5040");

		$practice = new Practices();
		$practice->setPractice("Valley Radiology");$practice->("13555 W. McDowell Rd.")->setAddress2("Ste. 106");$practice->("Goodyear")->setState("AZ")->setZip("85395")->setLatitude("33.46390");$practice->("-112.35101")->setPhone("(480) 425-5000");

		$practice = new Practices();
		$practice->setPractice("Valley Radiology");$practice->("16641 N. 40th St.")->setAddress2("Ste. 1")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.63857")->setLongitude("-111.99560")->setPhone("(480) 425-5000");

		$practice = new Practices();
		$practice->setPractice("Valley Radiology");$practice->("5310 W. Thunderbird Rd.")->setAddress2("Ste. 100")->setCity("Glendale")->setState("AZ")->setZip("85306")->setLatitude("33.61156");$practice->("-112.17488")->setPhone("(480) 425-5000");

		$practice = new Practices();
		$practice->setPractice("Valley Radiology");$practice->("5601 W. Eugie Ave.")->setAddress2("Ste. 102")->setCity("Glendale")->setState("AZ")->setZip("85304")->setLatitude("33.60672");$practice->("-112.18093")->setPhone("(480) 425-5000");

		$practice = new Practices();
		$practice->setPractice("Valley Radiology");$practice->("5605 W. Eugie Ave.")->setAddress2("Ste. 110")->setCity("Glendale")->setState("AZ")->setZip("85304")->setLatitude("33.60708");$practice->("-112.18150")->setPhone("(480) 425-5000");

		$practice = new Practices();
		$practice->setPractice("Valley Radiology");$practice->("5757 W. Thunderbird Rd.")->setAddress2("Ste. W-101 and W-100")->setCity("Glendale")->setState("AZ")->setZip("85306")->setLatitude("33.60967");$practice->("-112.18258")->setPhone("(480) 425-5000");

		$practice = new Practices();
		$practice->setPractice("Valley Radiology");$practice->("9305 W. Thomas Rd.")->setAddress2("Ste. 100 and 200")->setCity("Phoenix")->setState("AZ")->setZip("85037")->setLatitude("33.47800");$practice->("-112.26038")->setPhone("(480) 425-5000");

		$practice = new Practices();
		$practice->setPractice("Valley Surgical Clinics");$practice->("10210 N. 92nd St.")->setAddress2("Ste. 302")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57927")->setLongitude("-111.88255")->setPhone("(602) 996-4747");

		$practice = new Practices();
		$practice->setPractice("Valley Surgical Clinics");$practice->("3805 E. Bell Rd.")->setAddress2("Ste. 4800")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.64026")->setLongitude("-111.99990")->setPhone("(602) 996-4747");

		$practice = new Practices();
		$practice->setPractice("Valley Surgical Clinics");$practice->("9250 N. 3rd St.")->setAddress2("Ste. 3015")->setCity("Phoenix")->setState("AZ")->setZip("85020")->setLatitude("33.57017");$practice->("-112.07013")->setPhone("(602) 996-4747");

		$practice = new Practices();
		$practice->setPractice("Valley Urogynecology Associates, Ltd");$practice->("1616 E Maryland Avenue")->setCity("Phoenix")->setState("AZ")->setZip("85016")->setLatitude("33.53124");$practice->("-112.04664")->setPhone("(602) 788-1521");

		$practice = new Practices();
		$practice->setPractice("Valley Urologic Associates");$practice->("13555 W McDowell Road")->setAddress2("Ste 304");$practice->("Goodyear")->setState("AZ")->setZip("85395")->setLatitude("33.46390");$practice->("-112.35101")->setPhone("(623) 935-5522");

		$practice = new Practices();
		$practice->setPractice("Valley Urologic Associates");$practice->("183699 N 67th Avenue")->setAddress2("Ste 230")->setCity("Glendale")->setState("AZ")->setZip("85308")->setLatitude("33.65857");$practice->("-112.20305")->setPhone("(623) 935-5522");

		$practice = new Practices();
		$practice->setPractice("Valley Urologic Associates");$practice->("3815 E Bell Road")->setAddress2("Ste 3600")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.63850")->setLongitude("-111.99909")->setPhone("(623) 935-5522");

		$practice = new Practices();
		$practice->setPractice("Vincent J. Russo, M.D. ");$practice->("10290 N. 92nd St.")->setAddress2("Ste. 103")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58024")->setLongitude("-111.88379")->setPhone("(480) 860-1322");

		$practice = new Practices();
		$practice->setPractice("Virginia G. Piper Cancer Center Clinical Trials");$practice->("10510 N. 92nd St.")->setAddress2("Ste. 200")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58140")->setLongitude("-111.88313")->setPhone("(480) 323-1350");

		$practice = new Practices();
		$practice->setPractice("Weinberg Gastrointestinal Associates");$practice->("4915 E. Baseline Rd.")->setAddress2("Ste. 126");$practice->("Gilbert")->setState("AZ")->setZip("85234")->setLatitude("33.37849")->setLongitude("-111.72564")->setPhone("(480) 745-3690",NOW());
		$manager->persist($practice);

		// RUN ALL QUERIES
		$manager->flush();

	}

}
