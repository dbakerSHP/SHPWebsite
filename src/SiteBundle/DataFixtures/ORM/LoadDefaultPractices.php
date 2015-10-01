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





//		$practice->setPractice("Derosa Medical")->setAddress1("9377 E. Bell Rd.")->setAddress2("Ste. 143")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.63735")->setLongitude("-111.88224")->setPhone("(480) 619-4097");
//		$practice->setPractice("Desert Center for Allergy and Chest Diseases")->setAddress1("3815 East Bell Road")->setAddress2("Suite 4400")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.63850")->setLongitude("-111.99909")->setPhone("(602) 788-7211");
//		$practice->setPractice("Desert Center for Allergy and Chest Diseases")->setAddress1("8575 E. Princess Dr.")->setAddress2("Ste. 201")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.64493")->setLongitude("-111.89382")->setPhone("(602) 222-2736");
//		$practice->setPractice("Desert Institute for Spine Care, PC")->setAddress1("1635 East Myrtle Ave")->setAddress2("Suite 400")->setCity("Phoenix")->setState("AZ")->setZip("85020")->setLatitude("33.54160")->setLongitude("-112.04595")->setPhone("(602) 944-2900");
//		$practice->setPractice("Desert Institute for Spine Care, PC")->setAddress1("3487 South Mercy Road")->setCity("Gilbert")->setState("AZ")->setZip("85297")->setLatitude("33.28600")->setLongitude("-111.74989")->setPhone("(602) 944-2900");
//		$practice->setPractice("Desert Institute for Spine Care, PC")->setAddress1("8630 East Via De Ventura")->setAddress2("Suite 210")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.55411")->setLongitude("-111.89538")->setPhone("(602) 944-2900");
//		$practice->setPractice("Desert Jewel Obstetrics & Gynecology")->setAddress1("3501 N. Scottsdale Rd.")->setAddress2("Ste. 230")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48898")->setLongitude("-111.92584")->setPhone("(480) 970-1937");
//		$practice->setPractice("Desert Kidney Associates, PLC")->setAddress1("1600 W Chandler Blvd")->setAddress2("Ste 110")->setCity("Chandler")->setState("AZ")->setZip("85224")->setLatitude("33.30694")->setLongitude("-111.86931")->setPhone("(480) 834-9039");
//		$practice->setPractice("Desert Kidney Associates, PLC")->setAddress1("3511 S Mercy Rd")->setAddress2("Ste 102")->setCity("Gilbert")->setState("AZ")->setZip("85296")->setLatitude("33.28553")->setLongitude("-111.75005")->setPhone("(480) 834-9039");
//		$practice->setPractice("Desert Kidney Associates, PLC")->setAddress1("37100 N Gantzel Rd")->setAddress2("Ste 113")->setCity("San Tan Valley")->setState("AZ")->setZip("85140")->setLatitude("33.21587")->setLongitude("-111.56414")->setPhone("(480) 834-9039");
//		$practice->setPractice("Desert Kidney Associates, PLC")->setAddress1("612 W Baseline Road")->setCity("Mesa")->setState("AZ")->setZip("85210")->setLatitude("33.37914")->setLongitude("-111.84485")->setPhone("(480) 834-9039");
//		$practice->setPractice("Desert Kidney Associates, PLC")->setAddress1("6750 E Baywood Ave.")->setAddress2("Ste 505")->setCity("Mesa")->setState("AZ")->setZip("85206")->setLatitude("33.41136")->setLongitude("-111.68584")->setPhone("(480) 834-9039");
//		$practice->setPractice("Desert Orthopedic Specialists")->setAddress1("2905 W Warner")->setAddress2("Suite 23")->setCity("Chandler")->setState("AZ")->setZip("85224")->setLatitude("33.33392")->setLongitude("-111.89129")->setPhone("(480) 345-2031");
//		$practice->setPractice("Desert Ridge Family Physicians")->setAddress1("20940 N. Tatum Blvd.")->setAddress2("Ste. 300")->setCity("Phoenix")->setState("AZ")->setZip("85050")->setLatitude("33.67568")->setLongitude("-111.97936")->setPhone("(480) 607-0060");
//		$practice->setPractice("Desert Spine & Sports Physicians")->setAddress1("3700 N. 24th St")->setAddress2("Ste. 210")->setCity("Phoenix")->setState("AZ")->setZip("85016")->setLatitude("33.49070")->setLongitude("-112.03049")->setPhone("(602) 840-0681");
//		$practice->setPractice("Desert Spine & Sports Physicians")->setAddress1("6636 E. Baseline Rd")->setAddress2("Ste. 100")->setCity("Mesa")->setState("AZ")->setZip("85206")->setLatitude("33.37887")->setLongitude("-111.83465")->setPhone("(602) 840-0681");
//		$practice->setPractice("Desert Springs Cancer Care")->setAddress1("16838 E. Palisades Blvd.")->setAddress2("Suite C-153")->setCity("Fountain Hills")->setState("AZ")->setZip("85268")->setLatitude("33.60797")->setLongitude("-111.71666");
//		$practice->setPractice("Desert Springs Cancer Care")->setAddress1("21803 N. Scottsdale Road")->setAddress2("Suite 110")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.67171")->setLongitude("-111.92334")->setPhone("(480) 585-4673");
//		$practice->setPractice("Desert Vista Medical Associates")->setAddress1("7400 E. Osborn Road")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48867")->setLongitude("-111.92315")->setPhone("(480) 607-3800");
//		$practice->setPractice("Desert Vista Medical Associates")->setAddress1("7400 E. Thompson Peak Parkway")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.67069")->setLongitude("-111.92203")->setPhone("(480) 324-7000");
//		$practice->setPractice("DiabeVita Medical Center")->setAddress1("7400 E. McDonald Dr.")->setAddress2("Ste. 105")->setCity("Scottsdale")->setState("AZ")->setZip("85250")->setLatitude("33.52432")->setLongitude("-111.92104")->setPhone("(480) 315-9757");
//		$practice->setPractice("Digestive Health Specialist - Arizona")->setAddress1("8573 E. Princess Dr.")->setAddress2("Suite 215")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.64545")->setLongitude("-111.89432")->setPhone("(480) 563-5757");
//		$practice->setPractice("Donald A. Opila M.D.")->setAddress1("7331 E. Osborn Road")->setAddress2("Ste. 400")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48764")->setLongitude("-111.92426")->setPhone("(480) 994-1166");
//		$practice->setPractice("East Scottsdale Medical Care")->setAddress1("10565 N. 114th St.")->setAddress2("Ste. 103")->setCity("Scottsdale")->setState("AZ")->setZip("85259")->setLatitude("33.58195")->setLongitude("-111.83296")->setPhone("(480) 621-3505");
//		$practice->setPractice("East Valley Endocrinology Diabetes and Metabolism")->setAddress1("9500 East Ironwood Square Dr.")->setAddress2("Suite 201")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57847")->setLongitude("-111.87626")->setPhone("(480) 664-8988");
//		$practice->setPractice("Elena Sibley, MD")->setAddress1("3604 North Wells Fargo")->setAddress2("Suite L")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48981")->setLongitude("-111.92355")->setPhone("(480) 947-7401");
//		$practice->setPractice("Endocrinology Diabetes & Longevity Center of Arizona")->setAddress1("4045 W. Chandler Blvd.")->setCity("Chandler")->setState("AZ")->setZip("85226")->setLatitude("33.30453")->setLongitude("-111.91189")->setPhone("(480) 513-1042");
//		$practice->setPractice("Endocrinology Diabetes & Longevity Center of Arizona")->setAddress1("7344 E. Deer Valley Road")->setAddress2("Suite 100")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.68546")->setLongitude("-111.92233")->setPhone("(480) 513-1042");
//		$practice->setPractice("Entegrity Ear, Nose and Throat Specialists")->setAddress1("6950 E. Chauncey Ln.")->setAddress2("Ste. 100")->setCity("Phoenix")->setState("AZ")->setZip("85054")->setLatitude("33.65210")->setLongitude("-111.93070")->setPhone("(480) 538-3200");
//		$practice->setPractice("Evangelista Orthopedic Clinic")->setAddress1("6740 E. Camelback Rd.")->setAddress2("Stuite 101")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.50249")->setLongitude("-111.93619")->setPhone("(480) 656-0291");
//		$practice->setPractice("F. Timm McCarty D.O.")->setAddress1("7555 E. Osborn Rd.")->setAddress2("Ste. 104")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48732")->setLongitude("-111.91820")->setPhone("(480) 947-5454");
//		$practice->setPractice("F.S. Simonie M.D.")->setAddress1("10210 N. 92nd St.")->setAddress2("Ste. 205")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57927")->setLongitude("-111.88255")->setPhone("(480) 314-1189");
//		$practice->setPractice("Family Care Providers of Arizona")->setAddress1("10277 N. 92nd St.")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57863")->setLongitude("-111.87948")->setPhone("(480) 609-1444");
//		$practice->setPractice("Family Practice Specialists")->setAddress1("4350 E. Camelback Rd.")->setAddress2("Ste. F-100")->setCity("Phoenix")->setState("AZ")->setZip("85018")->setLatitude("33.51007")->setLongitude("-111.98784")->setPhone("(602) 955-8700");
//		$practice->setPractice("Foot and Ankle Center of AZ")->setAddress1("7312 East Deer Valley Road")->setAddress2("Ste #110")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.68485")->setLongitude("-111.92270")->setPhone("(480) 342-9999");
//		$practice->setPractice("Fountain Hills Pediatrics and Internal Medicine")->setAddress1("13620 North Saguaro Blvd")->setAddress2("Suite 100")->setCity("Fountain Hills")->setState("AZ")->setZip("85268")->setLatitude("33.60895")->setLongitude("-111.71507")->setPhone("(480) 837-6800");
//		$practice->setPractice("Four Peaks Neurology")->setAddress1("9746 N. 90th Pl.")->setAddress2("Ste. 203")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57391")->setLongitude("-111.88565")->setPhone("(480) 614-0707");
//		$practice->setPractice("Gary Adler M.D.")->setAddress1("13840 N. Northsight Blvd.")->setAddress2("Ste. 121")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.61194")->setLongitude("-111.89672")->setPhone("(480) 860-8380");
//		$practice->setPractice("Gary M. Weiner M.D.")->setAddress1("7301 E. 2nd St.")->setAddress2("Ste. 206")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.49105")->setLongitude("-111.92413")->setPhone("(480) 947-3700");
//		$practice->setPractice("Gawley Plastic Surgery M.D")->setAddress1("8913 East Bell Road")->setAddress2("Suite 101B")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.63912")->setLongitude("-111.88781")->setPhone("(480) 860-2173");
//		$practice->setPractice("Geoffrey H. Cook MD")->setAddress1("10250 N 92nd Street")->setAddress2("Suite 206")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58047")->setLongitude("-111.88277")->setPhone("(480) 656-4370");
//		$practice->setPractice("Geoffrey H. Cook MD")->setAddress1("75 Tortilla Drive")->setCity("Sedona")->setState("AZ")->setZip("86336")->setLatitude("34.86322")->setLongitude("-111.81143")->setPhone("(928) 282-1522");
//		$practice->setPractice("Gerrit Henry D.O.")->setAddress1("7331 E Osborne Drive")->setAddress2("#250")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48659")->setLongitude("-111.92410")->setPhone("(480) 947-7725");
//		$practice->setPractice("Gordon Grado, MD, Inc.")->setAddress1("2926 North Civic Center Plaza")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48132")->setLongitude("-111.92244")->setPhone("(480) 614-6300");
//		$practice->setPractice("Gordon Grado, MD, Inc.")->setAddress1("5310 W Thunderbird Road")->setAddress2("Suite 108")->setCity("Glendale")->setState("AZ")->setZip("85306")->setLatitude("33.61156")->setLongitude("-112.17488")->setPhone("(602) 978-0900");
//		$practice->setPractice("Gregory M. Crever, M.D.")->setAddress1("8600 E. Via de Ventura")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.55420")->setLongitude("-111.89589")->setPhone("(480) 991-3480");
//		$practice->setPractice("Gynecology Today, PLLC")->setAddress1("10210 N 92nd Street")->setAddress2("Suite 201")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57927")->setLongitude("-111.88255")->setPhone("(480) 291-6600");
//		$practice->setPractice("HonorHealth Bariatric Center")->setAddress1("10210 N. 92nd St.")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57927")->setLongitude("-111.88255")->setPhone("(480) 882-7460");
//		$practice->setPractice("HonorHealth Center for Endocrine and Pancreas Surgery")->setAddress1("10460 N. 92nd St")->setAddress2("Ste. 401")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58115")->setLongitude("-111.88368")->setPhone("(480) 882-7400");
//		$practice->setPractice("HonorHealth Corporate Health - Osborn")->setAddress1("3501 N Scottsdale")->setAddress2("Suite 231")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48898")->setLongitude("-111.92584")->setPhone("(480) 882-4770");
//		$practice->setPractice("HonorHealth Gastroenterology - Osborn")->setAddress1("3501 N. Scottsdale Road")->setAddress2("Suite 320")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48898")->setLongitude("-111.92584")->setPhone("(480) 882-5740");
//		$practice->setPractice("HonorHealth Gastroenterology - Shea")->setAddress1("10250 North 92nd Street")->setAddress2("Suite 210")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58047")->setLongitude("-111.88277")->setPhone("(480) 424-7228");
//		$practice->setPractice("HonorHealth Gastroenterology - Thompson Peak")->setAddress1("20401 N. 73rd St.")->setAddress2("Ste. 210")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.67300")->setLongitude("-111.92368")->setPhone("(480) 882-7510");
//		$practice->setPractice("HonorHealth Heart Group - Shea")->setAddress1("10101 N. 92nd St.")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57872")->setLongitude("-111.88012")->setPhone("(480) 882-7450");
//		$practice->setPractice("HonorHealth Inpatient Psychiatry")->setAddress1("10250 N. 92nd Street")->setAddress2("Suite 304")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58047")->setLongitude("-111.88277")->setPhone("(480) 451-6798");
//		$practice->setPractice("HonorHealth Medical Group - Arcadia 100")->setAddress1("4840 E. Indian School Rd.")->setAddress2("Ste. 100")->setCity("Phoenix")->setState("AZ")->setZip("85018")->setLatitude("33.49534")->setLongitude("-111.97665")->setPhone("(480) 882-7360");
//		$practice->setPractice("HonorHealth Medical Group - Arcadia 101")->setAddress1("4840 E. Indian School Rd.")->setAddress2("Ste. 101")->setCity("Phoenix")->setState("AZ")->setZip("85018")->setLatitude("33.49534")->setLongitude("-111.97665")->setPhone("(480) 882-7350");
//		$practice->setPractice("HonorHealth Medical Group - Chaparral")->setAddress1("5111 N. Scottsdale Rd.")->setCity("Scottsdale")->setState("AZ")->setZip("85250")->setLatitude("33.51181")->setLongitude("-111.92494")->setPhone("(480)882-7330");
//		$practice->setPractice("HonorHealth Medical Group - East Tempe")->setAddress1("1845 East Broadway Road")->setAddress2("Ste 116")->setCity("Tempe")->setState("AZ")->setZip("85282")->setLatitude("33.40660")->setLongitude("-111.90752")->setPhone("(480) 882-7380");
//		$practice->setPractice("HonorHealth Medical Group - McKellips")->setAddress1("1124 E. McKellips Road")->setAddress2("Suite 110")->setCity("Mesa")->setState("AZ")->setZip("85203")->setLatitude("33.45207")->setLongitude("-111.80642")->setPhone("(480) 882-7370");
//		$practice->setPractice("HonorHealth Medical Group - Mescal")->setAddress1("10900 N. Scottsdale Road")->setAddress2("Suite 603")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.58658")->setLongitude("-111.92670")->setPhone("(480)882-7470");
//		$practice->setPractice("HonorHealth Medical Group - Osborn")->setAddress1("7301 East 2nd Street")->setAddress2("Suite 300")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.49105")->setLongitude("-111.92413")->setPhone("(480) 882-7300");
//		$practice->setPractice("HonorHealth Medical Group - Paradise Valley")->setAddress1("5010 East Shea Blvd")->setAddress2("Suite D100")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.58333")->setLongitude("-111.97301")->setPhone("(480) 882-7420");
//		$practice->setPractice("HonorHealth Medical Group - Shea")->setAddress1("10301 N. 92nd Street")->setAddress2("Suite B-201")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57954")->setLongitude("-111.88126")->setPhone("(480) 882-7410");
//		$practice->setPractice("HonorHealth Medical Group - Thompson Peak")->setAddress1("20401 N. 73rd St.")->setAddress2("Ste. 105")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.67300")->setLongitude("-111.92368")->setPhone("(480) 882-7500");
//		$practice->setPractice("HonorHealth Medical Group - West Tempe")->setAddress1("1626 S Priest Drive")->setAddress2("Suite 104")->setCity("Tempe")->setState("AZ")->setZip("85281")->setLatitude("33.41092")->setLongitude("-111.96121")->setPhone("(480) 882-7320");
//		$practice->setPractice("HonorHealth Neurology - Shea")->setAddress1("10250 N. 92nd St.")->setAddress2("Ste. 304")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58047")->setLongitude("-111.88277")->setPhone("(480) 451-6798");
//		$practice->setPractice("HonorHealth Surgical and Trauma Specialists")->setAddress1("3501 N. Scottsdale Rd.")->setAddress2("Ste. 320")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48898")->setLongitude("-111.92584")->setPhone("(480) 882-5730");
//		$practice->setPractice("HonorHealth Urgent Care Plus")->setAddress1("13843 N. Tatum Blvd.")->setAddress2("Ste. 1")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.61307")->setLongitude("-111.97708")->setPhone("(480) 323-3366");
//		$practice->setPractice("Horizon Eye Specialists and Lasik Center")->setAddress1("16150 North Arrowhead Fountain Center Drive")->setAddress2("Suite H192")->setCity("Peoria")->setState("AZ")->setZip("85382")->setLatitude("33.63501")->setLongitude("-112.23700")->setPhone("(602) 467-4966");
//		$practice->setPractice("Horizon Eye Specialists and Lasik Center")->setAddress1("18325 N. Allied Way")->setAddress2("Ste. 100")->setCity("Phoenix")->setState("AZ")->setZip("85054")->setLatitude("33.65290")->setLongitude("-111.92959")->setPhone("(602) 467-4966");
//		$practice->setPractice("Horizon Eye Specialists and Lasik Center")->setAddress1("3030 North 3rd Street")->setAddress2("Suite 1250")->setCity("Phoenix")->setState("AZ")->setZip("85012")->setLatitude("33.48332")->setLongitude("-112.06988")->setPhone("(602) 467-4966");
//		$practice->setPractice("Integrated Orthopedics of AZ, PPLC")->setAddress1("20940 N Tatum Blvd.")->setAddress2("B-290")->setCity("Scottsdale")->setState("AZ")->setZip("85050")->setLatitude("33.69654")->setLongitude("-111.96907")->setPhone("(602) 734-1834");
//		$practice->setPractice("Integrative Cardiology & Preventative Medicine Center")->setAddress1("10900 N. Scottsdale Rd.")->setAddress2("Ste. 504")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.58658")->setLongitude("-111.92670")->setPhone("(480) 860-2030");
//		$practice->setPractice("Ironwood Physicians, PC")->setAddress1("10460 N. 92nd St.")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.581146")->setLongitude("-111.883676")->setPhone("(480) 278-8300");
//		$practice->setPractice("Ironwood Physicians, PC")->setAddress1("11209 N. Tatum Blvd.")->setAddress2("Ste. 260")->setCity("Phoenix")->setState("AZ")->setZip("85028")->setLatitude("33.58820")->setLongitude("-111.97649")->setPhone("(602) 494-6800");
//		$practice->setPractice("Ironwood Physicians, PC")->setAddress1("3645 S. Rome Street")->setAddress2("Suite 209")->setCity("Gilbert")->setState("AZ")->setZip("85297")->setLatitude("33.28478")->setLongitude("-111.75031");
//		$practice->setPractice("Ironwood Physicians, PC")->setAddress1("4633 East Chandler Blvd")->setAddress2("Suite 100")->setCity("Chandler")->setState("AZ")->setZip("85048")->setLatitude("33.30236")->setLongitude("-111.98120")->setPhone("(602) 494-8600");
//		$practice->setPractice("Ironwood Physicians, PC")->setAddress1("5810 West Beverly Lane")->setCity("Glendale")->setState("AZ")->setZip("85306")->setLatitude("33.63414")->setLongitude("-112.18356")->setPhone("(602) 494-6800");
//		$practice->setPractice("Ironwood Physicians, PC")->setAddress1("6111 East Arbor Ave")->setCity("Mesa")->setState("AZ")->setZip("85206")->setLatitude("33.41289")->setLongitude("-111.69938")->setPhone("(480) 981-1326");
//		$practice->setPractice("Ironwood Physicians, PC")->setAddress1("695 South Dobson Road")->setCity("Chandler")->setState("AZ")->setZip("85224")->setLatitude("33.29403")->setLongitude("-111.87356")->setPhone("(480) 821-2838");
//		$practice->setPractice("Ironwood Physicians, PC")->setAddress1("8880 E. Desert Cove Ave")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58528")->setLongitude("-111.88934")->setPhone("(480) 314-6670");
//		$practice->setPractice("Jamie Kapner M.D.")->setAddress1("10210 N. 92nd St.")->setAddress2("Ste. 100")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57927")->setLongitude("-111.88255")->setPhone("(480) 860-6486");
//		$practice->setPractice("Keith Zacher, MD")->setAddress1("3501 N. Scottsdale Road")->setAddress2("Suite 140")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48898")->setLongitude("-111.92584")->setPhone("(480) 772-2453");
//		$practice->setPractice("Kids Connection Pediatrics")->setAddress1("3815 East Bell Road")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.63850")->setLongitude("-111.99909")->setPhone("(623) 466-7469");
//		$practice->setPractice("Laurie Farricielli M.D.")->setAddress1("8560 E. Shea Blvd.")->setAddress2("Ste. 130")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58255")->setLongitude("-111.89654")->setPhone("(480) 860-0935");
//		$practice->setPractice("Lifescape Medical Associates")->setAddress1("8757 E. Bell Rd.")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.63978")->setLongitude("-111.89379")->setPhone("(480) 860-5500");
//		$practice->setPractice("McDowell Mountain Gynecology")->setAddress1("5620 E. Bell Rd.")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.64081")->setLongitude("-111.95928")->setPhone("(602) 493-9361");
//		$practice->setPractice("Medcubed PLLC")->setAddress1("7699 E. Pinnacle Peak Rd.")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.69455")->setLongitude("-111.91607")->setPhone("(480) 300-4663");
//		$practice->setPractice("Najma Usmani M.D.")->setAddress1("7331 E. Osborn Road")->setAddress2("Ste. 205")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48764")->setLongitude("-111.92426")->setPhone("(480) 994-9838");
//		$practice->setPractice("Neighborhood Outreach Access for Health Scottsdale Healthcare")->setAddress1("11130 E. Cholla St")->setAddress2("Building I")->setCity("Scottsdale")->setState("AZ")->setZip("85259")->setLatitude("33.58780")->setLongitude("-111.83992")->setPhone("(480) 882-7520");
//		$practice->setPractice("Neighborhood Outreach Access for Health Scottsdale Healthcare")->setAddress1("1300 N 48th St.")->setCity("Phoenix")->setState("AZ")->setZip("85008")->setLatitude("33.46215")->setLongitude("-111.98155")->setPhone("(602) 845-4201");
//		$practice->setPractice("Neighborhood Outreach Access for Health Scottsdale Healthcare")->setAddress1("15833 N 29th Street")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.63231")->setLongitude("-112.01920")->setPhone("(602) 449-2811");
//		$practice->setPractice("NKL Neurology")->setAddress1("9817 N. 95th St.")->setAddress2("Ste. 110")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57561")->setLongitude("-111.87557")->setPhone("(480) 779-3997");
//		$practice->setPractice("NOAH-Heuser Family Medicine Center Scottsdale Healthcare")->setAddress1("7301 E. 2nd St.")->setAddress2("Ste. 210")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.49105")->setLongitude("-111.92413")->setPhone("(480) 882-4545");
//		$practice->setPractice("North Scottsdale Center for Oral and Maxillofacial Surgery")->setAddress1("34225 N. 27th Dr.")->setAddress2("Building 4")->setCity("Phoenix")->setState("AZ")->setZip("85085")->setLatitude("33.79595")->setLongitude("-112.11720")->setPhone("(623) 581-5198");
//		$practice->setPractice("North Scottsdale Center for Oral and Maxillofacial Surgery")->setAddress1("6945 E. Sahuaro Dr.")->setAddress2("Ste. A-1")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.58389")->setLongitude("-111.93165");
//		$practice->setPractice("North Scottsdale Family Medicine")->setAddress1("6501 E. Greenway Pkwy.")->setAddress2("Ste. 160")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.62496")->setLongitude("-111.94189")->setPhone("(480) 948-9903");
//		$practice->setPractice("North Scottsdale Women's Health")->setAddress1("9745 North 90th Place")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57371")->setLongitude("-111.88503")->setPhone("(480) 661-1485");
//		$practice->setPractice("North Valley Neurology and Sleep")->setAddress1("14418 W Meeker Road")->setAddress2("Bldg B, Suite 200")->setCity("Sun City West")->setState("AZ")->setZip("85375")->setLatitude("33.65968")->setLongitude("-112.36998")->setPhone("(602) 482-2116");
//		$practice->setPractice("North Valley Neurology and Sleep")->setAddress1("16222 N 159th Ave")->setAddress2("Ste A100")->setCity("Glendale")->setState("AZ")->setZip("85306")->setLatitude("33.61626")->setLongitude("-112.40256")->setPhone("(602) 482-2116");
//		$practice->setPractice("North Valley Neurology and Sleep")->setAddress1("3815 E Bell Road")->setAddress2("Ste 2400")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.63850")->setLongitude("-111.99909")->setPhone("(602) 482-2116");
//		$practice->setPractice("Oasis Plastic Surgery, PLLC")->setAddress1("9590 E. Ironwood Square Dr.")->setAddress2("Suite 108")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57849")->setLongitude("-111.87495")->setPhone("(480) 264-6428");
//		$practice->setPractice("Ortho Arizona/John K. Bradway, M.D.")->setAddress1("10213 N. 92nd St.")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57857")->setLongitude("-111.87874")->setPhone("(480) 860-6005");
//		$practice->setPractice("OrthoArizona Center for Spinal Disorders")->setAddress1("3133 E. Camelback Road")->setAddress2("Suite 245")->setCity("Scottsdale")->setState("AZ")->setZip("85016")->setLatitude("33.50216")->setLongitude("-111.93899")->setPhone("(602) 253-7000");
//		$practice->setPractice("OrthoArizona Phoenix Orthopedic Consultants")->setAddress1("18699 North 67th Ave")->setAddress2("Suite 120")->setCity("Glendale")->setState("AZ")->setZip("85308")->setLatitude("33.65462")->setLongitude("-112.20224")->setPhone("(602) 398-8888");
//		$practice->setPractice("OrthoArizona Phoenix Orthopedic Consultants")->setAddress1("19636 North 27th Ave")->setAddress2("Suite 401")->setCity("Phoenix")->setState("AZ")->setZip("85308")->setLatitude("33.66478")->setLongitude("-112.11790")->setPhone("(602) 398-8888");
//		$practice->setPractice("OrthoArizona Phoenix Orthopedic Consultants")->setAddress1("5620 E. Bell Rd.")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.64081")->setLongitude("-111.95928")->setPhone("(602) 493-9361");
//		$practice->setPractice("Palo Verde Hematology Oncology")->setAddress1("1661 East Camelback Rd.")->setAddress2("Suite 375")->setCity("Phoenix")->setState("AZ")->setZip("85016")->setLatitude("33.50698")->setLongitude("-112.04547")->setPhone("(602) 258-4875");
//		$practice->setPractice("Palo Verde Hematology Oncology")->setAddress1("19841 N 27th Ave.")->setAddress2("Suite 103")->setCity("Phoenix")->setState("AZ")->setZip("85027")->setLatitude("33.66707")->setLongitude("-112.11581")->setPhone("(480) 941-1211");
//		$practice->setPractice("Palo Verde Hematology Oncology")->setAddress1("5601 W Eugie Ave")->setAddress2("Suite 106")->setCity("Glendale")->setState("AZ")->setZip("85304")->setLatitude("33.60672")->setLongitude("-112.18093")->setPhone("(602) 978-6255");
//		$practice->setPractice("Palo Verde Hematology Oncology")->setAddress1("7373 N Scottsdale RD")->setAddress2("Building E-100")->setCity("Scottsdale")->setState("AZ")->setZip("85032")->setLatitude("33.54489")->setLongitude("-111.92509")->setPhone("(480) 941-1211");
//		$practice->setPractice("Palo Verde Hematology Oncology")->setAddress1("807 South Ponderosa")->setCity("Payson")->setState("AZ")->setZip("85541")->setLatitude("34.23184")->setLongitude("-111.32130")->setPhone("(602) 258-4875");
//		$practice->setPractice("Palo Verde Hematology Oncology")->setAddress1("9250 W Thomas Rd.")->setAddress2("Suite 150")->setCity("Phoenix")->setState("AZ")->setZip("85037")->setLatitude("33.48038")->setLongitude("-112.25896")->setPhone("(602) 978-6255");
//		$practice->setPractice("Paradise Valley Allergy Associates Ltd")->setAddress1("20940 N. Tatum Blvd.")->setAddress2("Ste. 205")->setCity("Phoenix")->setState("AZ")->setZip("85050")->setLatitude("33.67568")->setLongitude("-111.97936")->setPhone("(480) 991-1930");
//		$practice->setPractice("Paul M. Francis, MD")->setAddress1("8412 E Shea Boulevard")->setAddress2("Suite 100")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58246")->setLongitude("-111.87362")->setPhone("(480) 614-2500");
//		$practice->setPractice("Peter J Ferrara, MD PC")->setAddress1("3604 North Wells Fargo")->setAddress2("Suite L")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48981")->setLongitude("-111.92355")->setPhone("(480) 947-7401");
//		$practice->setPractice("Peter W. Mitchell M.D.")->setAddress1("2222 E. Highland Ave.")->setAddress2("Ste. 425")->setCity("Phoenix")->setState("AZ")->setZip("85016")->setLatitude("33.50634")->setLongitude("-112.03388")->setPhone("(602) 667-6640");
//		$practice->setPractice("Phoenix Eye Group")->setAddress1("10250 N 92nd Street")->setAddress2("Ste 105")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58090")->setLongitude("-111.88242")->setPhone("(602) 888-4466");
//		$practice->setPractice("Phoenix Orthopedic Consultants")->setAddress1("18699 North 67th Ave")->setAddress2("Suite 120")->setCity("Glendale")->setState("AZ")->setZip("85308")->setLatitude("33.65462")->setLongitude("-112.20224")->setPhone("(602) 298-8888");
//		$practice->setPractice("Phoenix Orthopedic Consultants")->setAddress1("19636 N 27th Ave")->setAddress2("Suite 401")->setCity("Phoenix")->setState("AZ")->setZip("85027")->setLatitude("33.66478")->setLongitude("-112.11790")->setPhone("(602) 298-8888");
//		$practice->setPractice("Phoenix Orthopedic Consultants")->setAddress1("20401 N. 73rd St.")->setAddress2("Ste. 255")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.67300")->setLongitude("-111.92368")->setPhone("(602) 298-8888");
//		$practice->setPractice("Phoenix Orthopedic Group")->setAddress1("2222 E. Highland Ave.")->setAddress2("Ste. 203")->setCity("Phoenix")->setState("AZ")->setZip("85016")->setLatitude("33.50634")->setLongitude("-112.03388")->setPhone("(602) 277-1558");
//		$practice->setPractice("Phoenix Orthopedic Group")->setAddress1("9941 N. 95th St.")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57693")->setLongitude("-111.87578")->setPhone("(602) 277-1558");
//		$practice->setPractice("Pinnacle Internal Medicine and Headache Care")->setAddress1("2915 West Rose Garden Lane")->setAddress2("Ste 102")->setCity("Phoenix")->setState("AZ")->setZip("85027")->setLatitude("33.67618")->setLongitude("-112.12054")->setPhone("(623) 748-8300");
//		$practice->setPractice("Pinnacle Oncology Hematology")->setAddress1("9055 E. Del Camino Dr.")->setAddress2("Ste. 100")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.55548")->setLongitude("-111.88692")->setPhone("(480) 922-4600");
//		$practice->setPractice("Pulmonary Clinics of Scottsdale, PLLC")->setAddress1("10250 N 92nd Street")->setAddress2("Suite 300")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58047")->setLongitude("-111.88277")->setPhone("(480) 970-9649");
//		$practice->setPractice("QuestMedicine")->setAddress1("3301 N. Miller Rd.")->setAddress2("Ste. 160")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48638")->setLongitude("-111.91711")->setPhone("(480) 990-7200");
//		$practice->setPractice("Radiation Oncologists of Central Arizona & Phoenix Cyberknife")->setAddress1("4611 E. Shea Blvd.")->setAddress2("Ste. 120")->setCity("Phoenix")->setState("AZ")->setZip("85028")->setLatitude("33.58236")->setLongitude("-111.98187")->setPhone("(602) 441-3845");
//		$practice->setPractice("Reddy GI Associates")->setAddress1("1810 S Crimson Road")->setAddress2("Ste. 191")->setCity("Mesa")->setState("AZ")->setZip("85209")->setLatitude("33.38303")->setLongitude("-111.61839")->setPhone("(480) 393-0575");
//		$practice->setPractice("Reddy GI Associates")->setAddress1("595 N. Dobson Road")->setAddress2("Ste. A15")->setCity("Chandler")->setState("AZ")->setZip("85224")->setLatitude("33.31300")->setLongitude("-111.87508")->setPhone("(480) 393-0575");
//		$practice->setPractice("Richard J Brown MD, PLLC")->setAddress1("11000 N. Scottsdale Road")->setAddress2("Suite 130")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.58693")->setLongitude("-111.92674")->setPhone("(480) 947-2455");
//		$practice->setPractice("Richard S. Levinson M.D.")->setAddress1("7331 E. Osborn Road")->setAddress2("Ste. 205")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48764")->setLongitude("-111.92426")->setPhone("(480) 994-9838");
//		$practice->setPractice("Rimma Finkel M.D.")->setAddress1("1727 W. Frye Rd.")->setAddress2("Ste. 250")->setCity("Chandler")->setState("AZ")->setZip("85224")->setLatitude("33.29790")->setLongitude("-111.87059")->setPhone("(480) 963-3034");
//		$practice->setPractice("Rimma Finkel M.D.")->setAddress1("3615 S Rome Rd.")->setCity("Gilbert")->setState("AZ")->setZip("85297")->setLatitude("33.28479")->setLongitude("-111.75129")->setPhone("(480) 963-7019");
//		$practice->setPractice("Rimma Finkel M.D.")->setAddress1("3815 E. Bell Rd.")->setAddress2("Ste. 2200")->setCity("Phoenix")->setState("AZ")->setZip("85032")->setLatitude("33.63850")->setLongitude("-111.99909")->setPhone("(602) 931-4684");
//		$practice->setPractice("Scottsdale Cardiovascular Center")->setAddress1("10250 N 92nd Street")->setAddress2("Suite 202")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58047")->setLongitude("-111.88277")->setPhone("(480) 945-3535");
//		$practice->setPractice("Scottsdale Cardiovascular Center")->setAddress1("3099 Civic Center Plaza")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.58047")->setLongitude("-111.88277")->setPhone("(480) 945-3535");
//		$practice->setPractice("Scottsdale Center for Urology")->setAddress1("10301 North 92nd Street")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57954")->setLongitude("-111.88126")->setPhone("(480) 272-6400");
//		$practice->setPractice("Scottsdale Center for Women's Health")->setAddress1("8415 N. Pima Road")->setAddress2("Suite 210")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.55709")->setLongitude("-111.89074")->setPhone("(480) 425-8700");
//		$practice->setPractice("Scottsdale Critical Care")->setAddress1("7449 E. Osborn Rd.")->setAddress2("Ste. 7")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48725")->setLongitude("-111.92066")->setPhone("(480) 947-1130");
//		$practice->setPractice("Scottsdale CVT Surgeons")->setAddress1("7301 E. 2nd St.")->setAddress2("Ste. 310")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.49105")->setLongitude("-111.92413")->setPhone("(480) 947-7738");
//		$practice->setPractice("Scottsdale Emergency Associates")->setAddress1("7400 E. Osborn Rd.")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48867")->setLongitude("-111.92315")->setPhone("(480) 882-4809");
//		$practice->setPractice("Scottsdale Facial & Oral Surgery")->setAddress1("3501 N Scottsdale Rd")->setAddress2("Ste. 110")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.61404")->setLongitude("-111.92588")->setPhone("(480) 945-0663");
//		$practice->setPractice("Scottsdale Family Physicians")->setAddress1("9755 North 90th Street")->setAddress2("Ste. C200")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57460")->setLongitude("-111.88569")->setPhone("(480) 661-1755");
//		$practice->setPractice("Scottsdale Gastroenterology Associates")->setAddress1("3301 N Miller Road")->setAddress2("Ste 138")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48638")->setLongitude("-111.91711")->setPhone("(480) 646-8444");
//		$practice->setPractice("Scottsdale Internal Medicine")->setAddress1("8520 E. Shea Blvd.")->setAddress2("Ste. 100")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58246")->setLongitude("-111.87362")->setPhone("(480) 588-6924");
//		$practice->setPractice("Scottsdale Joint Center")->setAddress1("7301 E. 2nd St.")->setAddress2("Ste. 102")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.49105")->setLongitude("-111.92413")->setPhone("(480) 994-1149");
//		$practice->setPractice("Scottsdale Medical Associates")->setAddress1("7331 E. Osborn Road")->setAddress2("Ste. 205")->setCity("Scottsdale")->setState("AZ")->setZip("85259")->setLatitude("33.48764")->setLongitude("-111.92426")->setPhone("(480) 994-9838");
//		$practice->setPractice("Scottsdale Medical Center")->setAddress1("10117 N. 92nd St.")->setAddress2("Ste. 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57821")->setLongitude("-111.88016")->setPhone("(480) 614-5808");
//		$practice->setPractice("Scottsdale Medical Imaging, Ltd. ")->setAddress1("10290 N. 92nd St.")->setAddress2("Ste. 100")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58024")->setLongitude("-111.88379")->setPhone("(480) 425-5000");
//		$practice->setPractice("Scottsdale Medical Imaging, Ltd. ")->setAddress1("10575 N. Tatum Blvd.")->setAddress2("Ste. C-128")->setCity("Paradise Valley")->setState("AZ")->setZip("85253")->setLatitude("33.58175")->setLongitude("-111.97715")->setPhone("(480) 425-5000");
//		$practice->setPractice("Scottsdale Medical Imaging, Ltd. ")->setAddress1("16838 E. Palisades Blvd.")->setAddress2("Ste C-151")->setCity("Fountain Hills")->setState("AZ")->setZip("85268")->setLatitude("33.60797")->setLongitude("-111.71666")->setPhone("(480) 425-5000");
//		$practice->setPractice("Scottsdale Medical Imaging, Ltd. ")->setAddress1("20201 N. Scottsdale Healthcare Dr.")->setAddress2("Ste. 190")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.67102")->setLongitude("-111.92038")->setPhone("(480) 425-5000");
//		$practice->setPractice("Scottsdale Medical Imaging, Ltd. ")->setAddress1("2222 E. Highland Ave.")->setAddress2("Ste. 120")->setCity("Phoenix")->setState("AZ")->setZip("85016")->setLatitude("33.50634")->setLongitude("-112.03388")->setPhone("(480) 425-5000");
//		$practice->setPractice("Scottsdale Medical Imaging, Ltd. ")->setAddress1("33755 N. Scottsdale Rd")->setAddress2("Ste. 120")->setCity("Scottsdale")->setState("AZ")->setZip("85262")->setLatitude("33.79924")->setLongitude("-111.92803")->setPhone("(480) 425-5000");
//		$practice->setPractice("Scottsdale Medical Imaging, Ltd. ")->setAddress1("3501 N. Scottsdale Rd.")->setAddress2("Ste. 130")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48898")->setLongitude("-111.92584")->setPhone("(480) 425-5000");
//		$practice->setPractice("Scottsdale Medical Imaging, Ltd. ")->setAddress1("3645 S. Rome St.")->setAddress2("Ste. 101")->setCity("Gilbert")->setState("AZ")->setZip("85297")->setLatitude("33.28478")->setLongitude("-111.75031")->setPhone("(480) 425-5000");
//		$practice->setPractice("Scottsdale Medical Imaging, Ltd. ")->setAddress1("6501 E. Greenway Parkway")->setAddress2("Ste. 160")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.62496")->setLongitude("-111.94189")->setPhone("(480) 425-5000");
//		$practice->setPractice("Scottsdale Medical Imaging, Ltd. ")->setAddress1("7301 E 2nd Street")->setAddress2("Ste. 112 & 114")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.49105")->setLongitude("-111.92413")->setPhone("(480) 425-5000");
//		$practice->setPractice("Scottsdale Medical Imaging, Ltd. ")->setAddress1("7331 E. Osborn Road")->setAddress2("Ste. 140")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48764")->setLongitude("-111.92426")->setPhone("(480) 425-5000");
//		$practice->setPractice("Scottsdale Medical Imaging, Ltd. ")->setAddress1("9003 E. Shea Blvd.")->setAddress2("Ste. PET/Open MRI")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.61603")->setLongitude("-111.89263")->setPhone("(480) 425-5000");
//		$practice->setPractice("Scottsdale Medical Imaging, Ltd. ")->setAddress1("9220 E. Mountain View Rd.")->setAddress2("Ste. 100")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57633")->setLongitude("-111.87978")->setPhone("(480) 425-5000");
//		$practice->setPractice("Scottsdale Medical Imaging, Ltd. ")->setAddress1("9700 N. 91st St.")->setAddress2("Ste. B-110")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57369")->setLongitude("-111.88347")->setPhone("(480) 425-5000");
//		$practice->setPractice("Scottsdale Medical Imaging, Ltd. ")->setAddress1("20940 N. Tatum Blvd.")->setAddress2("Ste. 390")->setCity("Phoenix")->setState("AZ")->setZip("85050")->setLatitude("33.675675")->setLongitude("-111.979357")->setPhone("(480) 425-5000");
//		$practice->setPractice("Scottsdale Medical Imaging, Ltd. ")->setAddress1("13620 N. Saguaro Blvd.")->setAddress2("Ste. 100")->setCity("Scottsdale")->setState("AZ")->setZip("85268")->setLatitude("33.608952")->setLongitude("-111.715067")->setPhone("(480) 425-5000");
//		$practice->setPractice("Scottsdale Medical Imaging, Ltd. ")->setAddress1("7400 E. Osborn Rd.")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.488673")->setLongitude("-111.923153")->setPhone("(480) 425-5000");
//		$practice->setPractice("Scottsdale Obstetrics and Gynecology")->setAddress1("7331 E. Osborn Road")->setAddress2("Ste. 305")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48764")->setLongitude("-111.92426")->setPhone("(480) 945-4849");
//		$practice->setPractice("Scottsdale Pathology Associates")->setAddress1("9003 E. Shea Blvd.")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58095")->setLongitude("-111.88525")->setPhone("(480) 323-3383");
//		$practice->setPractice("Scottsdale Pediatric Center")->setAddress1("10752 N. 89th Place")->setAddress2("Ste. 126")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58440")->setLongitude("-111.88840")->setPhone("(480) 860-1161");
//		$practice->setPractice("Scottsdale Perinatal Associates")->setAddress1("6950 E. Chauncey Ln.")->setAddress2("Ste. 150")->setCity("Phoenix")->setState("AZ")->setZip("85054")->setLatitude("33.65210")->setLongitude("-111.93070")->setPhone("(480) 970-7664");
//		$practice->setPractice("Scottsdale Physicians Group")->setAddress1("8328 E. Hartford Drive")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.64286")->setLongitude("-111.89970")->setPhone("(480) 214-9720");
//		$practice->setPractice("Scottsdale Primary Care")->setAddress1("10900 N. Scottsdale Road")->setCity("Scottsdale")->setState("AZ")->setZip("85254")->setLatitude("33.58658")->setLongitude("-111.92670")->setPhone("(480) 607-3800");
//		$practice->setPractice("Scottsdale Primary Care")->setAddress1("7543 East 2nd Street")->setAddress2("Suite 101")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.49128")->setLongitude("-111.91820")->setPhone("(480) 607-3800");
//		$practice->setPractice("Scottsdale Sports Medicine Institute LLC")->setAddress1("10133 North 92nd Street")->setAddress2("#102")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57821")->setLongitude("-111.87951")->setPhone("(480) 664-4615");
//		$practice->setPractice("Scottsdale Surgical Consultants")->setAddress1("3501 N. Scottsdale Rd.")->setAddress2("Ste. 234")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48898")->setLongitude("-111.92584")->setPhone("(480) 421-1991");
//		$practice->setPractice("Scottsdale Urologic Surgeons")->setAddress1("10210 N. 92nd St.")->setAddress2("Ste. 100")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57927")->setLongitude("-111.88255")->setPhone("(480) 949-1212");
//		$practice->setPractice("Scottsdale Urologic Surgeons")->setAddress1("7301 E. 2nd St.")->setAddress2("Ste. 308")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.49105")->setLongitude("-111.92413")->setPhone("(480) 860-6486");
//		$practice->setPractice("Scottsdale Women's Care")->setAddress1("7301 E. 2nd St.")->setAddress2("Ste. 310")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.49105")->setLongitude("-111.92413")->setPhone("(480) 947-8090");
//		$practice->setPractice("Shree Physicians")->setAddress1("8404 E. Shea Blvd.")->setAddress2("Ste. 100")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58246")->setLongitude("-111.87362")->setPhone("(480) 584-5959");
//		$practice->setPractice("Sonoran Consultants in OB/GYN")->setAddress1("9500 E. Ironwood Square Dr.")->setAddress2("Ste. 124")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57847")->setLongitude("-111.87626")->setPhone("(480) 860-0550");
//		$practice->setPractice("Sonoran Foot Specialist, PLLC")->setAddress1("9767 North 91st Street")->setAddress2("Suite 101")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57394")->setLongitude("-111.88239")->setPhone("(480) 629-5903");
//		$practice->setPractice("Sonoran Hip Center")->setAddress1("7400 E. Thompson Peak Pkwy.")->setAddress2("Ste. 240")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.67069")->setLongitude("-111.92203")->setPhone("(480) 398-4624");
//		$practice->setPractice("Sonoran Orthopedic Trauma Surgeons")->setAddress1("3126 N. Civic Center Plaza")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.48420")->setLongitude("-111.92208")->setPhone("(480) 874-2040");
//		$practice->setPractice("Southwest Heart and Lung")->setAddress1("10930 N. Tatum Blvd.")->setAddress2("Ste. 103")->setCity("Phoenix")->setState("AZ")->setZip("85028")->setLatitude("33.58595")->setLongitude("-111.97831")->setPhone("(602) 263-7600");
//		$practice->setPractice("Southwest Kidney Institute")->setAddress1("16838 E. Palisades Blvd.")->setCity("Fountain Hills")->setState("AZ")->setZip("85268")->setLatitude("33.60797")->setLongitude("-111.71666")->setPhone("(480) 610-6100");
//		$practice->setPractice("Southwest Kidney Institute")->setAddress1("337 E. Coronado Rd.")->setAddress2("Ste. 201")->setCity("Phoenix")->setState("AZ")->setZip("85004")->setLatitude("33.46705")->setLongitude("-112.06764")->setPhone("(480) 610-6100");
//		$practice->setPractice("Southwest Kidney Institute")->setAddress1("9746 N. 90th Pl.")->setAddress2("Ste. 205")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57391")->setLongitude("-111.88565")->setPhone("(480) 610-6100");
//		$practice->setPractice("Specialty Orthopaedic Surgery")->setAddress1("9700 N. 91st St.")->setAddress2("Ste. B108")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57369")->setLongitude("-111.88347")->setPhone("(602) 466-7378");
//		$practice->setPractice("Spectrum Dermatology")->setAddress1("20950 N. Tatum Blvd.")->setAddress2("Suite 250")->setCity("Phoenix")->setState("AZ")->setZip("85050")->setLatitude("33.67619")->setLongitude("-111.97836")->setPhone("(480) 948-8400");
//		$practice->setPractice("Spectrum Dermatology")->setAddress1("4350 E Camelback Rd.")->setAddress2("Suite A200")->setCity("Phoenix")->setState("AZ")->setZip("85018")->setLatitude("33.51007")->setLongitude("-111.98784")->setPhone("(480) 948-8400");
//		$practice->setPractice("Spectrum Dermatology")->setAddress1("7425 E. Shea Blvd.")->setAddress2("Ste. 110")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58177")->setLongitude("-111.92134")->setPhone("(480) 948-8400");
//		$practice->setPractice("Spine and Orthopedic Specialists")->setAddress1("16838 E. Palisades Blvd.")->setAddress2("Ste. C-153")->setCity("Fountain Hills")->setState("AZ")->setZip("85268")->setLatitude("33.60797")->setLongitude("-111.71666")->setPhone("(480) 353-0446");
//		$practice->setPractice("Spine and Orthopedic Specialists")->setAddress1("20401 N. 73rd St.")->setAddress2("Ste. 175")->setCity("Scottsdale")->setState("AZ")->setZip("85255")->setLatitude("33.67300")->setLongitude("-111.92368")->setPhone("(480) 353-0446");
//		$practice->setPractice("Spine Institute of Arizona")->setAddress1("16515 South 40th Street")->setAddress2("Suite 119")->setCity("Phoenix")->setState("AZ")->setZip("85048")->setLatitude("33.29721")->setLongitude("-111.99617")->setPhone("(602) 953-9500");
//		$practice->setPractice("Spine Institute of Arizona")->setAddress1("18700 North 64th Drive")->setAddress2("Suite 202")->setCity("Glendale")->setState("AZ")->setZip("85308")->setLatitude("33.65519")->setLongitude("-112.20053")->setPhone("(602) 952-9500");
//		$practice->setPractice("Spine Institute of Arizona")->setAddress1("3483 South Mercy Road")->setAddress2("Suite 102")->setCity("Gilbert")->setState("AZ")->setZip("85297")->setLatitude("33.28603")->setLongitude("-111.74939")->setPhone("(602) 953-9500");
//		$practice->setPractice("Spine Institute of Arizona")->setAddress1("9735 North 90th Place")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57329")->setLongitude("-111.88601")->setPhone("(602) 953-9500");
//		$practice->setPractice("Stephen R. Rosenthal M.D.")->setAddress1("10210 N. 92nd St.")->setAddress2("Ste. 103")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57927")->setLongitude("-111.88255")->setPhone("(480) 661-4200");
//		$practice->setPractice("Steven H. Turkeltaub, MD, PC")->setAddress1("10290 N. 92nd Street")->setAddress2("Suite 207")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.58024")->setLongitude("-111.88379")->setPhone("(480) 451-3000");
//		$practice->setPractice("Steven H. Turkeltaub, MD, PC")->setAddress1("18275 N. 59th Avenue")->setAddress2("Suite E-126")->setCity("Glendale")->setState("AZ")->setZip("85308")->setLatitude("33.65155")->setLongitude("-112.18612")->setPhone("(480) 451-3000");
//		$practice->setPractice("Stonecreek Medical Associates")->setAddress1("11209 N. Tatum Blvd.")->setAddress2("Ste. 175")->setCity("Phoenix")->setState("AZ")->setZip("85028")->setLatitude("33.58820")->setLongitude("-111.97649")->setPhone("(602) 652-8900");
//		$practice->setPractice("Talus in Motion")->setAddress1("5111 N. Scottsdale Rd.")->setAddress2("Suite 101")->setCity("Scottsdale")->setState("AZ")->setZip("85251")->setLatitude("33.49364")->setLongitude("-111.92628")->setPhone("(480) 994-3668");
//		$practice->setPractice("Tara Brodkin M.D.")->setAddress1("9070 E. Desert Cove Ave.")->setAddress2("Ste. 102")->setCity("Scottsdale")->setState("AZ")->setZip("85260")->setLatitude("33.58561")->setLongitude("-111.88497")->setPhone("(480) 860-2322");
//		$practice->setPractice("Tatum Highlands Medical Associates")->setAddress1("26224 N. Tatum Blvd.")->setAddress2("Ste. 15A")->setCity("Phoenix")->setState("AZ")->setZip("85050")->setLatitude("33.72520")->setLongitude("-111.97795")->setPhone("(480) 663-9632");
//		$practice->setPractice("Tatum Internal Medicine and Associates")->setAddress1("4729 E Union Hills Dr.")->setAddress2("Ste. 111")->setCity("Phoenix")->setState("AZ")->setZip("85050")->setLatitude("33.65445")->setLongitude("-111.98035")->setPhone("(602) 482-5444");
//		$practice->setPractice("The Heart Clinic PC")->setAddress1("10293 North 92nd Street")->setCity("Scottsdale")->setState("AZ")->setZip("85258")->setLatitude("33.57900")->setLongitude("-111.87944")->setPhone("(480) 747-6535");
//		$practice->setPractice("The Heart Clinic PC")->setAddress1("36889 North Tom Darlington Drive")->setCity("Carefree")->setState("AZ")->setZip("85377")->setLatitude("33.82086")->setLongitude("-111.92416")->setPhone("(480) 488-9220");
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
