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
		$practice->setPractice("HonorHealth Medical Group - 92nd Street");
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
		$practice->setPractice("Arizona Center for Hematology and Oncology");
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

	}

}
