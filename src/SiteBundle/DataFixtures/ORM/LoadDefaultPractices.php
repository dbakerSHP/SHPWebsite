<?php
/**
 * Created by PhpStorm.
 * User: jstgermain
 * Date: 9/29/15
 * Time: 10:13 AM
 */

namespace SiteBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use SiteBundle\Entity\Practices;

class LoadDefaultPractices extends AbstractFixture implements OrderedFixtureInterface
{

	public function getOrder()
	{
		return 2;
	}

	public function load(ObjectManager $manager)
	{

		// START ALL PRACTICES

		$practice = new Practices();
		$practice->setPractice("21st Century Oncology of Arizona");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("4C Medical Group");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("A.O.A. Paradise Valley OBGYN");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Admire Plastic Surgery");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Advanced Fertility Care");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Affiliated Allergy & Pulmonary Associates");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Affiliated Dermatology");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Affiliated Urologists");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Agave Pediatrics");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Ali Ghazanfare MD PLLC");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Allergy & Environmental Treatment Center, LLC");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Allergy, Asthma, and Immunology Associates");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Allergy, Ear, Nose, and Throat Center Ltd.");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("American Advanced Surgery");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona Arrhythmia Consultants");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona Asthma and Allergy Institute");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona Bone and Joint Specialists");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona Cardiology Group");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona Cardiovascular and Thoracic Surgeons");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona Center for Cancer Care");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona Center for Pain Relief");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona Digestive Health");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona Eye Specialists");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona Gastrointestinal Associates");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona Hand and Wrist Specialists");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona Heart and Lung Surgery");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona Kidney Disease and Hypertension Center");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona Neurological Institute");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona Neurology and Sleep Center");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona Ocular and Facial Plastic Surgery");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona Oculoplastic Specialists");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona Oncology Associates");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona Oncology Services");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona Orthopedic and Sports Medicine Specialists");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona Orthopedic Associates");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona Pain Specialists");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona Prostate Cancer Center");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona Pulmonary Specialists");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona State Urology");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona Transplant Associates");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arizona Urology Specialists");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Arrow Surgical Associates");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Associated Retina Consultants");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Atria Heart, PPL");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("BCG Oncology");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Berardi Aesthetics and Plastic Surgery");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Bertrand P Kaper, MD PC");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Bruce Freedman M.D.");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Bryan D. Friedman, D.O., LLC");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Cactus Pediatrics Orthopaedics");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Cardiologists of Scottsdale");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Cardiovascular Consultants");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Cardiovascular Institute of Scottsdale");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Care MD PLC");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Center for Dermatology, PC");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Center for Pain and Supportive Care");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Clear Dermatology and Aesthetics Center");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Colon and Rectal Clinic of Scottsdale");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Comprehensive Breast Center of Arizona");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("DC Ranch Family Medicine, PLLC");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Deborah D. Wilson, MD");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Deborah Trojanowski, MD");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Deer Valley OB/GYN");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Dermatique");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("DeRosa Medical");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Desert Center for Allergy and Chest Diseases");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Desert Institute for Spine Care, PC");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Desert Jewel Obstetrics & Gynecology");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Desert Kidney Associates, PLC");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Desert Orthopedic Specialists");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Desert Ridge Family Physicians");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Desert Spine & Sports Physicians");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Desert Springs Cancer Care");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Desert Vista Medical Associates");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("DiabeVita Medical Center");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Digestive Health Specialist - Arizona");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Donald A. Opila M.D.");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("East Scottsdale Medical Care");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("East Valley Endocrinology Diabetes and Metabolism");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Elena Sibley, MD");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Endocrinology Diabetes & Longevity Center of Arizona");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Entegrity Ear, Nose and Throat Specialists");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Evangelista Orthopedic Clinic");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("F. Timm McCarty D.O.");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("F.S. Simonie M.D.");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Family Care Providers of Arizona");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Family Practice Specialists");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Foot and Ankle Center of AZ");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Fountain Hills Pediatrics and Internal Medicine");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Four Peaks Neurology");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Gary Adler M.D.");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Gary M. Weiner M.D.");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Gawley Plastic Surgery M.D");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Geoffrey H. Cook MD");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Gerrit Henry D.O.");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Gordon Grado, MD, Inc.");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Gregory M. Crever, M.D.");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Gynecology Today, PLLC");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("GyneMedic");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("HonorHealth Bariatric Center");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("HonorHealth Center for Endocrine and Pancreas Surgery");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("HonorHealth Corporate Health - Osborn");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("HonorHealth Gastroenterology - Osborn");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("HonorHealth Gastroenterology - Shea");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("HonorHealth Gastroenterology - Thompson Peak");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("HonorHealth Heart Group - Shea");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("HonorHealth Inpatient Psychiatry");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("HonorHealth Medical Group - Arcadia 100");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("HonorHealth Medical Group - Arcadia 101");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("HonorHealth Medical Group - Chaparral");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("HonorHealth Medical Group - East Tempe");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("HonorHealth Medical Group - McKellips");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("HonorHealth Medical Group - Mescal");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("HonorHealth Medical Group - Osborn");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("HonorHealth Medical Group - Paradise Valley");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("HonorHealth Medical Group - Shea");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("HonorHealth Medical Group - Thompson Peak");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("HonorHealth Medical Group - West Tempe");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("HonorHealth Neurology - Shea");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("HonorHealth Surgical and Trauma Specialists");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("HonorHealth Urgent Care Plus");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Horizon Eye Specialists and Lasik Center");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Integrated Orthopedics of AZ, PPLC");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Integrative Cardiology & Preventative Medicine Center");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Ironwood Physicians, PC");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Jamie Kapner M.D.");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Keith Zacher, MD");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Kids Connection Pediatrics");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Laurie Farricielli M.D.");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Lifescape Medical Associates");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("McDowell Mountain Gynecology");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Medcubed PLLC");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Najma Usmani M.D.");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Neighborhood Outreach Access for Health Scottsdale Healthcare");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("NKL Neurology");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("NOAH-Heuser Family Medicine Center Scottsdale Healthcare");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("North Scottsdale Center for Oral and Maxillofacial Surgery");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("North Scottsdale Family Medicine");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("North Scottsdale Women's Health");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("North Valley Neurology and Sleep");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Oasis Plastic Surgery, PLLC");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Ortho Arizona/John K. Bradway, M.D.");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("OrthoArizona Center for Spinal Disorders");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("OrthoArizona Phoenix Orthopedic Consultants");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Palo Verde Hematology Oncology");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Paradise Valley Allergy Associates Ltd");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Paul M. Francis, MD");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Peter J Ferrara, MD PC");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Peter W. Mitchell M.D.");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Phoenix Eye Group");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Phoenix Orthopedic Consultants");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Phoenix Orthopedic Group");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Pinnacle Internal Medicine and Headache Care");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Pinnacle Oncology Hematology");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Pulmonary Clinics of Scottsdale, PLLC");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("QuestMedicine");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Radiation Oncologists of Central Arizona & Phoenix Cyberknife");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Reddy GI Associates");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Richard J Brown MD, PLLC");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Richard S. Levinson M.D.");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Rimma Finkel M.D.");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Scottsdale Cardiovascular Center");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Scottsdale Center for Urology");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Scottsdale Center for Women's Health");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Scottsdale Critical Care");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Scottsdale CVT Surgeons");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Scottsdale Emergency Associates");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Scottsdale Facial & Oral Surgery");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Scottsdale Family Physicians");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Scottsdale Gastroenterology Associates");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Scottsdale Internal Medicine");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Scottsdale Joint Center");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Scottsdale Medical Associates");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Scottsdale Medical Center");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Scottsdale Medical Imaging, Ltd.");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Scottsdale Obstetrics and Gynecology");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Scottsdale Pathology Associates");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Scottsdale Pediatric Center");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Scottsdale Perinatal Associates");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Scottsdale Physicians Group");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Scottsdale Primary Care");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Scottsdale Sports Medicine Institute LLC");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Scottsdale Surgical Consultants");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Scottsdale Urologic Surgeons");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Scottsdale Women's Care");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Shree Physicians");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Sonoran Consultants in OB/GYN");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Sonoran Foot Specialist, PLLC");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Sonoran Hip Center");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Sonoran Orthopedic Trauma Surgeons");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Southwest Heart and Lung");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Southwest Kidney Institute");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Spectrum Dermatology");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Spine and Orthopedic Specialists");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Spine Institute of Arizona");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Stephen R. Rosenthal M.D.");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Steven H. Turkeltaub, MD, PC");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Stonecreek Medical Associates");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Talus in Motion");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Tara Brodkin M.D.");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Tatum Highlands Medical Associates");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Tatum Internal Medicine and Associates");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("The Heart Clinic PC");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("The Insomnia and Sleep Institute of Arizona");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("The Pediatric Endocrine and Diabetes Clinic, PC");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Urology Associates");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Valley Anesthesiology Consultants");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Valley ENT, PC");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Valley Integrated Pain, PLLC");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Valley OB/GYN Associates");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Valley Pain Consultants");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Valley Radiology");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Valley Surgical Clinics");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Valley Urogynecology Associates, Ltd");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Valley Urologic Associates");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Vincent J. Russo, M.D.");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Virginia G. Piper Cancer Center Clinical Trials");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Weinberg Gastrointestinal Associates");
		$manager->persist($practice);
		$manager->flush();

		$practice = new Practices();
		$practice->setPractice("Specialty Orthopaedic Surgery");
		$manager->persist($practice);
		$manager->flush();




//		$practice->setPractice("The Insomnia and Sleep Institute of Arizona")->setAddress1("8330 E. Hartford Drive")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.64277")->setLongitude("-111.90017")->setPhone("(480) 745-3547");
//		$practice->setPractice("The Pediatric Endocrine and Diabetes Clinic, PC")->setAddress1("333 West Thomas Road")->setAddress2("Suite 201")->setCity("Phoenix")->setState("AZ")->setZip("85013")->setLatitude("33.48003")->setLongitude("-112.07895")->setPhone("(602) 277-1117");
//		$practice->setPractice("The Pediatric Endocrine and Diabetes Clinic, PC")->setAddress1("7010 East Chauncey Lane")->setAddress2("Suite 210")->setCity("Phoenix")->setState("AZ")->setZip("85054")->setLatitude("33.65186")->setLongitude("-111.92970")->setPhone("(602) 277-1117");
//		$practice->setPractice("The Pediatric Endocrine and Diabetes Clinic, PC")->setAddress1("9250 West Thomas Road")->setAddress2("Suite 150")->setCity("Phoenix")->setState("AZ")->setZip("85037")->setLatitude("33.48038")->setLongitude("-112.25896")->setPhone("(602) 277-1117");
//		$practice->setPractice("Urology Associates")->setAddress1("10301 North 92nd Street")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57954")->setLongitude("-111.88126")->setPhone("(480) 661-2662");
//		$practice->setPractice("Urology Associates")->setAddress1("1313 East Osborne Road")->setAddress2("Ste. B150")->setCity("Phoenix")->setState("AZ")->setZip("85014")->setLatitude("33.48700")->setLongitude("-112.05408")->setPhone("(602) 264-4431");
//		$practice->setPractice("Valley Anesthesiology Consultants")->setAddress1("1850 N. Central Ave.")->setAddress2("Ste. 1600")->setCity("Phoenix")->setState("AZ")->setZip("85004")->setLatitude("33.46855")->setLongitude("-112.07508")->setPhone("(602) 262-8916");
//		$practice->setPractice("Valley ENT, PC")->setAddress1("18700 North 64th Drive")->setAddress2("Suite 201")->setCity("Glendale")->setState("AZ")->setZip("85308")->setLatitude("33.65519")->setLongitude("-112.20053")->setPhone("(623) 566-4718");
//		$practice->setPractice("Valley ENT, PC")->setAddress1("20201 North Scottsdale Healthcare Drive")->setAddress2("Suite 230")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.67102")->setLongitude("-111.92038")->setPhone("(480) 513-0336");
//		$practice->setPractice("Valley ENT, PC")->setAddress1("2058 South Dobson Road")->setAddress2("Suite 10")->setCity("Mesa")->setState("AZ")->setZip("85202")->setLatitude("33.37702")->setLongitude("-111.87933")->setPhone("(480) 614-0499");
//		$manager->persist($practice);
//		$practice->setPractice("Valley ENT, PC")->setAddress1("3501 North Scottsdale Road")->setAddress2("Suite 160")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48898")->setLongitude("-111.92584")->setPhone("(480) 273-8448");
//		$manager->flush();
//
//		$manager->persist($practice);
//		$practice->setPractice("Valley ENT, PC")->setAddress1("8952 East Desert Cove Ave.")->setAddress2("Suite 205")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58560")->setLongitude("-111.88839")->setPhone("(480) 273-8688");
//		$manager->flush();
//
//		$manager->persist($practice);
//		$practice->setPractice("Valley ENT, PC")->setAddress1("9097 East Desert Cove Ave.")->setAddress2("Suite 260")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58481")->setLongitude("-111.88463")->setPhone("(480) 614-0499");
//		$manager->flush();
//
//		$manager->persist($practice);
//		$practice->setPractice("Valley Integrated Pain, PLLC")->setAddress1("3501 North Scottsdale Road")->setAddress2("Suite 221")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48898")->setLongitude("-111.92584")->setPhone("(480) 422-8510");
//		$manager->flush();
//
//		$manager->persist($practice);
//		$practice->setPractice("Valley Integrated Pain, PLLC")->setAddress1("9977 North 90th Street")->setAddress2("Suite 240")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57556")->setLongitude("-111.88532")->setPhone("(480) 422-8510");
//		$manager->flush();
//
//		$manager->persist($practice);
//		$practice->setPractice("Valley OB/GYN Associates")->setAddress1("3501 N. Scottsdale Rd.")->setAddress2("Ste. 280")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48898")->setLongitude("-111.92584")->setPhone("(480) 945-6583");
//		$manager->flush();
//
//		$manager->persist($practice);
//		$practice->setPractice("Valley Pain Consultants")->setAddress1("10200 North 92nd Street")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57833")->setLongitude("-111.88141")->setPhone("(480) 889-0255");
//		$manager->flush();
//
//		$manager->persist($practice);
//		$practice->setPractice("Valley Pain Consultants")->setAddress1("1331 North 7th Street")->setAddress2("Ste 355")->setCity("Phoenix")->setState("AZ")->setZip("85006")->setLatitude("33.46335")->setLongitude("-112.06405")->setPhone("(480) 991-3005");
//		$manager->flush();
//
//		$practice->setPractice("Valley Pain Consultants")->setAddress1("2095 West Pecos Road")->setAddress2("Ste A8")->setCity("Chandler")->setState("AZ")->setZip("85224")->setLatitude("33.29061")->setLongitude("-111.87809")->setPhone("(480) 889-0255");
//		$practice->setPractice("Valley Pain Consultants")->setAddress1("3301 North Miller Road")->setAddress2("Ste 120")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48638")->setLongitude("-111.91711")->setPhone("(480) 889-0255");
//		$practice->setPractice("Valley Pain Consultants")->setAddress1("3483 South Mercy Road")->setAddress2("Ste 102")->setCity("Gilbert")->setState("AZ")->setZip("85297")->setLatitude("33.28603")->setLongitude("-111.74939")->setPhone("(480) 889-0255");
//		$practice->setPractice("Valley Pain Consultants")->setAddress1("5425 East Bell Road")->setAddress2("Ste 115")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.64002")->setLongitude("-111.96407")->setPhone("(480) 991-3005");
//		$practice->setPractice("Valley Pain Consultants")->setAddress1("6780 West Thunderbird Road")->setAddress2("Ste A105")->setCity("Peoria")->setState("AZ")->setZip("85381")->setLatitude("33.61104")->setLongitude("-112.20499")->setPhone("(602) 242-5040");
//		$practice->setPractice("Valley Pain Consultants")->setAddress1("9305 West Thomas Road")->setAddress2("Ste 500")->setCity("Phoenix")->setState("AZ")->setZip("85037")->setLatitude("33.47800")->setLongitude("-112.26038")->setPhone("(602) 242-5040");
//		$practice->setPractice("Valley Radiology")->setAddress1("13555 W. McDowell Rd.")->setAddress2("Ste. 106")->setCity("Goodyear")->setState("AZ")->setZip("85395")->setLatitude("33.46390")->setLongitude("-112.35101")->setPhone("(480) 425-5000");
//		$practice->setPractice("Valley Radiology")->setAddress1("16641 N. 40th St.")->setAddress2("Ste. 1")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.63857")->setLongitude("-111.99560")->setPhone("(480) 425-5000");
//		$practice->setPractice("Valley Radiology")->setAddress1("5310 W. Thunderbird Rd.")->setAddress2("Ste. 100")->setCity("Glendale")->setState("AZ")->setZip("85306")->setLatitude("33.61156")->setLongitude("-112.17488")->setPhone("(480) 425-5000");
//		$practice->setPractice("Valley Radiology")->setAddress1("5601 W. Eugie Ave.")->setAddress2("Ste. 102")->setCity("Glendale")->setState("AZ")->setZip("85304")->setLatitude("33.60672")->setLongitude("-112.18093")->setPhone("(480) 425-5000");
//		$practice->setPractice("Valley Radiology")->setAddress1("5605 W. Eugie Ave.")->setAddress2("Ste. 110")->setCity("Glendale")->setState("AZ")->setZip("85304")->setLatitude("33.60708")->setLongitude("-112.18150")->setPhone("(480) 425-5000");
//		$practice->setPractice("Valley Radiology")->setAddress1("5757 W. Thunderbird Rd.")->setAddress2("Ste. W-101 and W-100")->setCity("Glendale")->setState("AZ")->setZip("85306")->setLatitude("33.60967")->setLongitude("-112.18258")->setPhone("(480) 425-5000");
//		$practice->setPractice("Valley Radiology")->setAddress1("9305 W. Thomas Rd.")->setAddress2("Ste. 100 and 200")->setCity("Phoenix")->setState("AZ")->setZip("85037")->setLatitude("33.47800")->setLongitude("-112.26038")->setPhone("(480) 425-5000");
//		$practice->setPractice("Valley Surgical Clinics")->setAddress1("10210 N. 92nd St.")->setAddress2("Ste. 302")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57927")->setLongitude("-111.88255")->setPhone("(602) 996-4747");
//		$practice->setPractice("Valley Surgical Clinics")->setAddress1("3805 E. Bell Rd.")->setAddress2("Ste. 4800")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.64026")->setLongitude("-111.99990")->setPhone("(602) 996-4747");
//		$practice->setPractice("Valley Surgical Clinics")->setAddress1("9250 N. 3rd St.")->setAddress2("Ste. 3015")->setCity("Phoenix")->setState("AZ")->setZip("85020")->setLatitude("33.57017")->setLongitude("-112.07013")->setPhone("(602) 996-4747");
//		$practice->setPractice("Valley Urogynecology Associates, Ltd")->setAddress1("1616 E Maryland Avenue")->setCity("Phoenix")->setState("AZ")->setZip("85016")->setLatitude("33.53124")->setLongitude("-112.04664")->setPhone("(602) 788-1521");
//		$practice->setPractice("Valley Urologic Associates")->setAddress1("13555 W McDowell Road")->setAddress2("Ste 304")->setCity("Goodyear")->setState("AZ")->setZip("85395")->setLatitude("33.46390")->setLongitude("-112.35101")->setPhone("(623) 935-5522");
//		$practice->setPractice("Valley Urologic Associates")->setAddress1("183699 N 67th Avenue")->setAddress2("Ste 230")->setCity("Glendale")->setState("AZ")->setZip("85308")->setLatitude("33.65857")->setLongitude("-112.20305")->setPhone("(623) 935-5522");
//		$practice->setPractice("Valley Urologic Associates")->setAddress1("3815 E Bell Road")->setAddress2("Ste 3600")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.63850")->setLongitude("-111.99909")->setPhone("(623) 935-5522");
//		$practice->setPractice("Vincent J. Russo, M.D. ")->setAddress1("10290 N. 92nd St.")->setAddress2("Ste. 103")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58024")->setLongitude("-111.88379")->setPhone("(480) 860-1322");
//		$practice->setPractice("Virginia G. Piper Cancer Center Clinical Trials")->setAddress1("10510 N. 92nd St.")->setAddress2("Ste. 200")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58140")->setLongitude("-111.88313")->setPhone("(480) 323-1350");
//		$practice->setPractice("Weinberg Gastrointestinal Associates")->setAddress1("4915 E. Baseline Rd.")->setAddress2("Ste. 126")->setCity("Gilbert")->setState("AZ")->setZip("85234")->setLatitude("33.37849")->setLongitude("-111.72564")->setPhone("(480) 745-3690");
//		$manager->persist($practice);
//		$manager->flush();

	}

}
