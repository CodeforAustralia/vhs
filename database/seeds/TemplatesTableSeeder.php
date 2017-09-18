<?php

use Illuminate\Database\Seeder;

class TemplatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Templates Seeder for templates information
    	$templates = $this->getAllTemplates();

    	foreach($templates as $template) {
    		DB::table('templates')->insert([
    			'template_id' => $template[0],
    			'summary' => $template[1],
    			'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
                ]);
    	}
    }

    // return all victorian postcodes
    public function getAllTemplates()
    {
    	$templates = array();

    	$templates[] = [
    	"TMP-CL-01", "Acknowledgement of receipt of Public Housing Application"
    	];
    	$templates[] = [
    	"TMP-CL-02", "Request for further documentation" 
    	];
    	$templates[] = [
    	"TMP-CL-03", "Appointment confirmation or appointment request" 
    	];
    	$templates[] = [
    	"TMP-CL-05", "Public Housing Application Removal Letter" 
    	];
    	$templates[] = [
    	"TMP-CL-06", "Ineligible Public Housing Application" 
    	];
    	$templates[] = [
    	"TMP-CL-07", "Notification split Public Housing Application" 
    	];
    	$templates[] = [
    	"TMP-CL-08", "Public housing application rejected: unable to be revived" 
    	];
    	$templates[] = [
    	"TMP-CL-09", "General Housing: Public Housing Application approval letter" 
    	];
    	$templates[] = [
    	"TMP-CL-11", "Special Accommodation Requirements (SAR)" 
    	];
    	$templates[] = [
    	"TMP-CL-12", "Early Housing Application approved letter" 
    	];
    	$templates[] = [
    	"TMP-CL-13", "Early Housing Application not approved letter" 
    	];
    	$templates[] = [
    	"TMP-CL-14", "Early Housing Application status removal letter" 
    	];
    	$templates[] = [
    	"TMP-CL-15", "Offer Letter: Wait Turn" 
    	];
    	$templates[] = [
    	"TMP-CL-16", "Offer letter: Early Housing" 
    	];
    	$templates[] = [
    	"TMP-CL-17", "Offer Letter: Wait Turn Final" 
    	];
    	$templates[] = [
    	"TMP-CL-18", "Offer Letter: Property Management" 
    	];
    	$templates[] = [
    	"TMP-CL-19", "Reject letter (two WT offers have been refused)" 
    	];
    	$templates[] = [
    	"TMP-CL-20", "First Offer Refused (Early Housing)" 
    	];
    	$templates[] = [
    	"TMP-CL-21", "Special Accommodation Requirement (SAR) Request: Approval" 
    	];
    	$templates[] = [
    	"TMP-CL-22", "Special Accommodation Requirement (SAR) Request: Partial Approval" 
    	];
    	$templates[] = [
    	"TMP-CL-23", "Special Accommodation Requirement (SAR) Request: Non Approval" 
    	];
    	$templates[] = [
    	"TMP-CL-24", "Eligibility Confirmation Questionnaire (ECQ)" 
    	];
    	$templates[] = [
    	"TMP-CL-25", "Eligibility Confirmation Questionnaire Covering Letter (ECQ)" 
    	];
    	$templates[] = [
    	"TMP-CL-26", "Reminder Letter: Eligibility Confirmation Questionnaire (ECQ)" 
    	];
    	$templates[] = [
    	"TMP-CL-28", "Public Housing Application Update Confirmation" 
    	];
    	$templates[] = [
    	"TMP-CL-29", "Revive Public Housing Application" 
    	];
    	$templates[] = [
    	"TMP-CL-37", "Referral Confirmation by Applicant to Housing Association or Housing Provider" 
    	];
    	$templates[] = [
    	"TMP-CL-38", "Applicant Referral to Housing Association or Housing Provider" 
    	];
    	$templates[] = [
    	"TMP-CL-39", "Housing Association or Housing Provider Referral Notification to Applicant" 
    	];
    	$templates[] = [
    	"TMP-CL-40", "Early Housing and SAR Approval letter" 
    	];
    	$templates[] = [
    	"TMP-CL-42", "Early Housing not approved and SAR Approved letter" 
    	];
    	$templates[] = [
    	"TMP-CL-43", "Community Agency Referral Form" 
    	];
    	$templates[] = [
    	"TMP-CL-45", "Early Housing Approved and SAR not approved" 
    	];
    	$templates[] = [
    	"TMP-CL-61", "Appointment Cover Letter" 
    	];
    	$templates[] = [
    	"TMP-CL-63", "Support Worker Appointment Cover Letter" 
    	];
    	$templates[] = [
    	"TMP-CL-81", "Acknowledgement of Receipt of Appeal" 
    	];
    	$templates[] = [
    	"TMP-CL-82", "Appeal Advocate Covering Letter" 
    	];
    	$templates[] = [
    	"TMP-CL-83", "Appeal Successful at Tier 1" 
    	];
    	$templates[] = [
    	"TMP-CL-84", "Appeal Unsuccessful at Tier 1" 
    	];
    	$templates[] = [
    	"TMP-CL-85", "Appeal Not Considered: Resolved" 
    	];
    	$templates[] = [
    	"TMP-CL-86", "Appeal Contact Letter" 
    	];
    	$templates[] = [
    	"TMP-CL-88", "Appeal Generic Withdrawn" 
    	];
    	$templates[] = [
    	"TMP-CL-89", "Appeal Response Letter: Tier 2" 
    	];
    	$templates[] = [
    	"TMP-CL-93", "Appeal internal assessment Tier 1 Memo" 
    	];
    	$templates[] = [
    	"TMP-CL-95", "Unable to revive Public Housing Application" 
    	];
    	$templates[] = [
    	"TMP-CL-97", "Covering Letter to Support Worker" 
    	];
    	$templates[] = [
    	"TMP-CL-98", "CHP Letter to Support Worker" 
    	];
    	$templates[] = [
    	"TMP-CL-99", "Covering Letter to Support Worker" 
    	];
    	$templates[] = [
    	"TMP-CL-102", "Early Housing approved with partial SAR Approval" 
    	];
    	$templates[] = [
    	"TMP-CL-103", "Early Housing and SAR not approved" 
    	];
    	$templates[] = [
    	"TMP-CL-104", "Early Housing not Approved Partial SAR approved" 
    	];
    	$templates[] = [
    	"TMP-CL-106", "Early Housing Application Recommendation and Outcome" 
    	];
    	$templates[] = [
    	"TMP-CL-107", "Referral Cover Letter" 
    	];
    	$templates[] = [
    	"TMP-CL-109", "Supported Housing: Eligible Program form" 
    	];
    	$templates[] = [
    	"TMP-CL-111", "Final offer (Early Housing)" 
    	];
    	$templates[] = [
    	"TMP-CL-112", "EH offer (first or final) has been refused due to(not SAR)" 
    	];
    	$templates[] = [
    	"TMP-CL-115", "Refused Offer: Wait Turn" 
    	];
    	$templates[] = [
    	"TMP-CL-116", "Form of Authority" 
    	];
    	$templates[] = [
    	"TMP-CL-118", "Acknowledgement of Requested Information" 
    	];
    	$templates[] = [
    	"TMP-CL-120", "Property Offer Sheet" 
    	];
    	$templates[] = [
    	"TMP-CL-123", "Memo to Manager" 
    	];
    	$templates[] = [
    	"TMP-CL-124", "Reassessment at Tier 1 Level" 
    	];
    	$templates[] = [
    	"TMP-CL-125", "Memorandum to Director of HCB" 
    	];
    	$templates[] = [
    	"TMP-CL-126", "Letter of Good Standing" 
    	];
    	$templates[] = [
    	"TMP-CL-127", "Non Appealable Appeal Request" 
    	];
    	$templates[] = [
    	"TMP-CL-128", "Recurring Homelessness Assessment form" 
    	];
    	$templates[] = [
    	"TMP-CL-129", "Complaint Confirmation" 
    	];
    	$templates[] = [
    	"TMP-CL-140", "SAR Cover Letter" 
    	];
    	$templates[] = [
    	"TMP-CL-141", "Removed Application Reminder" 
    	];
    	$templates[] = [
    	"TMP-CL-152", "Other" 
    	];
    	$templates[] = [
    	"TMP-CL-162", "Change in application details form" 
    	];
    	$templates[] = [
    	"TMP-CL-163", "Offer SAR Cover Letter and Form" 
    	];
    	$templates[] = [
    	"TMP-CL-164", "Public housing application rejected: unable to be revived" 
    	];
    	$templates[] = [
    	"TMP-CL-165", "Factsheet: Tenant relocation" 
    	];
    	$templates[] = [
    	"TMP-CL-166", "Factsheet: SHASP" 
    	];
    	$templates[] = [
    	"TMP-CL-167", "Factsheet: Bond Loan" 
    	];
    	$templates[] = [
    	"TMP-CL-168", "Factsheet: Housing Associations" 
    	];
    	$templates[] = [
    	"TMP-CL-169", "Factsheet: Fixed Rent" 
    	];
    	$templates[] = [
    	"TMP-CL-170", "Profit and Loss Statement" 
    	];
    	$templates[] = [
    	"TMP-CL-171", "13 week wage statement" 
    	];
    	$templates[] = [
    	"TMP-CL-172", "Factsheet: Income Confirmation Service" 
    	];
    	$templates[] = [
    	"TMP-CL-173", "Factsheet: Tenant relocation" 
    	];
    	$templates[] = [
    	"TMP-CL-174", "Withdrawal of Income Confirmation form" 
    	];
    	$templates[] = [
    	"TMP-CL-175", "Public Housing Application Form" 
    	];
    	$templates[] = [
    	"TMP-CL-176", "VEMP housing application form" 
    	];
    	$templates[] = [
    	"TMP-CL-177", "Acknowledgement of Enquiry Cover Letter" 
    	];
    	$templates[] = [
    	"TMP-CL-178", "Acknowledgement of Enquiry Cover Letter" 
    	];
    	$templates[] = [
    	"TMP-CL-179", "Acknowledgement of Enquiry Cover Letter" 
    	];
    	$templates[] = [
    	"TMP-CL-180", "Acknowledgement of Enquiry Cover Letter" 
    	];
    	$templates[] = [
    	"TMP-CL-181", "Relocation: Disclaimer form" 
    	];
    	$templates[] = [
    	"TMP-CL-182", "Arrears Repayment Agreement" 
    	];
    	$templates[] = [
    	"TMP-CL-183", "Eligibility Confirmation Questionaire Form to be completed by the Primary applicant" 
    	];
    	$templates[] = [
    	"TMP-CL-184", "Refused Move Back Offer Letter" 
    	];
    	$templates[] = [
    	"TMP-CL-191", "Eligibility Confirmation Questionnaire Covering Letter (ECQ)" 
    	];
    	$templates[] = [
    	"TMP-CL-192", "Appeals Request for Further Information" 
    	];
    	$templates[] = [
    	"TMP-CL-193", "Eligibility Confirmation Questionaire Form to be completed by the Primary applicant" 
    	];
    	$templates[] = [
    	"TMP-CL-194", "Applicant Choice Acknowledgement and Decision Form" 
    	];
    	$templates[] = [
    	"TMP-CL-195", "Applicant Choice Acknowledgement and Decision Form" 
    	];
    	$templates[] = [
    	"TMP-CL-196", "Bond Arrears Repayment Agreement" 
    	];
    	$templates[] = [
    	"TMP-CL-200", "Community Housed Letter" 
    	];
    	$templates[] = [
    	"TMP-CL-201", "CHP Removal Letter" 
    	];
    	$templates[] = [
    	"TMP-CL-202", "CHP Rejected Letter" 
    	];
    	$templates[] = [
    	"TMP-CL-210", "Generic offer letter (excluding Property Management)" 
    	];
    	$templates[] = [
    	"TMP-CL-211", "Refused offer ROI letterGeneric refused offer letter (excluding property management)" 
    	];
    	$templates[] = [
    	"TMP-CL-215", "Special Housing Requirement outcome letter" 
    	];
    	$templates[] = [
    	"TMP-CL-102A", "Early Housing approved with partial SAR Approval" 
    	];
    	$templates[] = [
    	"TMP-CL-106A", "Acknowledgement of Enquiry Cover Letter" 
    	];
    	$templates[] = [
    	"TMP-CL-111A", "Final offer (Early Housing)" 
    	];
    	$templates[] = [
    	"TMP-CL-12A", "Early Housing Application approved letter" 
    	];
    	$templates[] = [
    	"TMP-CL-14A", "Early Housing Application status removal letter" 
    	];
    	$templates[] = [
    	"TMP-CL-19A", "EH offer (first or final) has been refused due to(notSAR)" 
    	];
    	$templates[] = [
    	"TMP-CL-40A", "Early Housing and SAR Approval letter" 
    	];
    	$templates[] = [
    	"TMP-CL-45A", "Early Housing Approved and SAR not approved" 
    	];
    	$templates[] = [
    	"TMP-CL-219", "Generic refused offer letter with SARs (CHP applications)" 
    	];
    	$templates[] = [
    	"TMP-CL-216", "Generic Refused Letter with SARs (PM related only)" 
    	];
    	$templates[] = [
    	"TMP-CL-217", "Generic Refused offer with SAR (DHHS)" 
    	];
    	$templates[] = [
    	"TMP-CL-218", "Generic SAR not received"
    	];

        $templates[] = [
        "TMP-TN-003T00", "Generic covering letter to support worker"
        ];
        $templates[] = [
        "TMP-TN-005T", "Residential Tenancy Agreement - ongoing lease and service charges"
        ];
        $templates[] = [
        "TMP-TN-006T", "Ownership of Property - Statutory Declaration"
        ];
        $templates[] = [
        "TMP-TN-007T", "Leased Property Acknowledgement Form"
        ];
        $templates[] = [
        "TMP-TN-008T00", "Rent Deduction Service form"
        ];
        $templates[] = [
        "TMP-TN-008T01", "Rent Deduction Service form"
        ];
        $templates[] = [
        "TMP-TN-008TDD", "Rent Deduction Service form"
        ];
        $templates[] = [
        "TMP-TN-009T", "Water Authority Information Release"
        ];
        $templates[] = [
        "TMP-TN-010T00", "Emergency contact form"
        ];
        $templates[] = [
        "TMP-TN-010T01", "Emergency contact form"
        ];
        $templates[] = [
        "TMP-TN-011T00", "Authority for Centrelink to release customer information to the Director of Housing"
        ];
        $templates[] = [
        "TMP-TN-011T01", "Authority for Centrelink to release customer information to the Director of Housing"
        ];
        $templates[] = [
        "TMP-TN-012T00", "Form of authority TPT support Agency"
        ];
        $templates[] = [
        "TMP-TN-012T01", "Form of authority TPT support Agency"
        ];
        $templates[] = [
        "TMP-TN-013T00", "IC withdrawal Consent form"
        ];
        $templates[] = [
        "TMP-TN-013T0202", "IC withdrawal Consent form"
        ];
        $templates[] = [
        "TMP-TN-014T00", "Pet agreement form"
        ];
        $templates[] = [
        "TMP-TN-014T01", "Pet agreement form"
        ];
        $templates[] = [
        "TMP-TN-015T", "Residential Tenancy Agreement - fixed term lease and service charges"
        ];
        $templates[] = [
        "TMP-TN-016T", "Movable Unit Notice of Tenancy Commencement"
        ];
        $templates[] = [
        "TMP-TN-017T00", "Application For Rebated Rent Form"
        ];
        $templates[] = [
        "TMP-TN-017T01", "Application For Rebated Rent Form"
        ];
        $templates[] = [
        "TMP-TN-019T02", "Market rent increase"
        ];
        $templates[] = [
        "TMP-TN-019T04", "Market rent increase"
        ];
        $templates[] = [
        "TMP-TN-020T02", "Market rent decrease and no change"
        ];
        $templates[] = [
        "TMP-TN-020T04", "Market rent decrease and no change"
        ];
        $templates[] = [
        "TMP-TN-028T02", "Service charge changes"
        ];
        $templates[] = [
        "TMP-TN-028T04", "Service charge changes"
        ];
        $templates[] = [
        "TMP-TN-031T", "Eligible for rebated rent assessment"
        ];
        $templates[] = [
        "TMP-TN-039T", "No longer eligible for rebated rent assessment"
        ];
        $templates[] = [
        "TMP-TN-043T", "Vacated Rebate Assessment - eligible and not eligible"
        ];
        $templates[] = [
        "TMP-TN-048T", "AFRR letter - Type 1 and Type 2"
        ];
        $templates[] = [
        "TMP-TN-049T", "Age promotion for 16 year old"
        ];
        $templates[] = [
        "TMP-TN-050T", "Age promotion letter for 18/25 year old"
        ];
        $templates[] = [
        "TMP-TN-052T", "Income verification letter"
        ];
        $templates[] = [
        "TMP-TN-053T", "Request for further documentation letter with cancellation date"
        ];
        $templates[] = [
        "TMP-TN-056T", "IC Error Discrepancy letter"
        ];
        $templates[] = [
        "TMP-TN-056AT", "IC Dependant discrepancy letter"
        ];
        $templates[] = [
        "TMP-TN-057T", "Rebate assessment stored rent"
        ];
        $templates[] = [
        "TMP-TN-059T", "Cancellation of Rebate - no response to contact review"
        ];
        $templates[] = [
        "TMP-TN-062T", "Rebate cancellation letter - manual"
        ];
        $templates[] = [
        "TMP-TN-063T", "Automated rebate contact review"
        ];
        $templates[] = [
        "TMP-TN-065T", "Subsidy-Fire, Flood, Property Repair/Upgrade, Resident caretaker, Tenant liaison officer, Compassionate tenancy, Tenant transfer/relocation"
        ];
        $templates[] = [
        "TMP-TN-066T", "DHS legal services branch ruling
        Tenant VCAT compensation"
        ];
        $templates[] = [
        "TMP-TN-068T", "Subsidy - Neighbourhood renewal"
        ];
        $templates[] = [
        "TMP-TN-069T", "Subsidy - Rent payable deferred approval letter"
        ];
        $templates[] = [
        "TMP-TN-071T", "Subsidy 100yo sole or joint occupancy"
        ];
        $templates[] = [
        "TMP-TN-072T", "Subsidy – Temp Absence sole or joint occupancy approved or not approved"
        ];
        $templates[] = [
        "TMP-TN-076T", "Subsidy – Sponsored migrant sole or joint occupancy approved"
        ];
        $templates[] = [
        "TMP-TN-078T", "Carer of children"
        ];
        $templates[] = [
        "TMP-TN-079T", "Cancel subsidy"
        ];
        $templates[] = [
        "TMP-TN-080T", "Amend subsidy"
        ];
        $templates[] = [
        "TMP-TN-081T", "Reverse subsidy"
        ];
        $templates[] = [
        "TMP-TN-082T00", "Income Confirmation Fact Sheet"
        ];
        $templates[] = [
        "TMP-TN-082T0202", "Income Confirmation Fact Sheet"
        ];
        $templates[] = [
        "TMP-TN-083T00", "How is my rent calculated? Fact sheet"
        ];
        $templates[] = [
        "TMP-TN-083T0202", "How is my rent calculated? Fact sheet"
        ];
        $templates[] = [
        "TMP-TN-084T00", "13 week profit and loss statement"
        ];
        $templates[] = [
        "TMP-TN-084T0202", "13 week profit and loss statement"
        ];
        $templates[] = [
        "TMP-TN-085T00", "13 week wage Statement Form"
        ];
        $templates[] = [
        "TMP-TN-085T0202", "13 week wage Statement Form"
        ];
        $templates[] = [
        "TMP-TN-086T00", "Fixed Rent Fact Sheet"
        ];
        $templates[] = [
        "TMP-TN-086T0202", "Fixed Rent Fact Sheet"
        ];
        $templates[] = [
        "TMP-TN-087T", "Automated tenure review letter"
        ];
        $templates[] = [
        "TMP-TN-088T", "Bankruptcy approved zero or credit balance letter"
        ];
        $templates[] = [
        "TMP-TN-089T", "Bankruptcy approved in debt letter"
        ];
        $templates[] = [
        "TMP-TN-090T", "Bankruptcy Not Approved"
        ];
        $templates[] = [
        "TMP-TN-091T03", "Internal - Briefing Note"
        ];
        $templates[] = [
        "TMP-TN-091T07", "Internal - Briefing Note"
        ];
        $templates[] = [
        "TMP-TN-092T", "Transfer of Tenancy - Request additional documentation"
        ];
        $templates[] = [
        "TMP-TN-093T00", "Transfer of Tenancy Application"
        ];
        $templates[] = [
        "TMP-TN-093T03", "Transfer of Tenancy Application"
        ];
        $templates[] = [
        "TMP-TN-094T", "Transfer of Tenancy Not Approved"
        ];
        $templates[] = [
        "TMP-TN-095T", "Transfer of Tenancy termination"
        ];
        $templates[] = [
        "TMP-TN-096T", "Transfer of Tenancy Approved/Appointment Letter"
        ];
        $templates[] = [
        "TMP-TN-098T05", "Agreement to Repay Vacated Rental/Maintenance Debt"
        ];
        $templates[] = [
        "TMP-TN-099T", "Deactivation Approval letter"
        ];
        $templates[] = [
        "TMP-TN-100T", "Deactivation Not Approved letter"
        ];
        $templates[] = [
        "TMP-TN-101T", "Accept liability for damage"
        ];
        $templates[] = [
        "TMP-TN-102T", "Form of Acceptance of Responsibility for Damage"
        ];
        $templates[] = [
        "TMP-TN-103T", "Notice of Repair - Section 78(1)"
        ];
        $templates[] = [
        "TMP-TN-104T", "Cost of Repairs Notice for a current tenancy"
        ];
        $templates[] = [
        "TMP-TN-105T", "Initial Home Visit Letter"
        ];
        $templates[] = [
        "TMP-TN-106T", "Periodic Home Visit Letter"
        ];
        $templates[] = [
        "TMP-TN-107T", "Home Visit Record Sheet"
        ];
        $templates[] = [
        "TMP-TN-109T", "Local agreement revised"
        ];
        $templates[] = [
        "TMP-TN-111T", "Agreement cancelled letter - Maintenance"
        ];
        $templates[] = [
        "TMP-TN-112T", "Agreement created"
        ];
        $templates[] = [
        "TMP-TN-115T", "Local Agreement (Rental & Maintenance) - Making up missed payment loaded"
        ];
        $templates[] = [
        "TMP-TN-116T", "Making up missed payment honoured - agreement is reinstated"
        ];
        $templates[] = [
        "TMP-TN-118T", "Local agreement completed"
        ];
        $templates[] = [
        "TMP-TN-119T", "Initial arrears letter"
        ];
        $templates[] = [
        "TMP-TN-121T", "Maintenance debt not on an agreement"
        ];
        $templates[] = [
        "TMP-TN-123T", "Broken legal agreement -rental"
        ];
        $templates[] = [
        "TMP-TN-125T", "Order of Possession agreement created - standard conditions"
        ];
        $templates[] = [
        "TMP-TN-127T", "Order of Possession agreement broken"
        ];
        $templates[] = [
        "TMP-TN-128T", "Order of Possession agreement created - roll into local agreement"
        ];
        $templates[] = [
        "TMP-TN-131T", "Changed income - invitation to review terms of agreement"
        ];
        $templates[] = [
        "TMP-TN-135T04", "Vacated Account Debt reminder letter"
        ];
        $templates[] = [
        "TMP-TN-137T", "Combined vacated debt agreement created"
        ];
        $templates[] = [
        "TMP-TN-138T", "Combined vacated debt agreement broken"
        ];
        $templates[] = [
        "TMP-TN-140T", "Combined vacated debt agreement completed"
        ];
        $templates[] = [
        "TMP-TN-141T", "Rental arrears agreement form"
        ];
        $templates[] = [
        "TMP-TN-142T", "Maintenance arrears agreement form"
        ];
        $templates[] = [
        "TMP-TN-143T", "Order of Possession agreement form"
        ];
        $templates[] = [
        "TMP-TN-145T", "Local Agreement Broken"
        ];
        $templates[] = [
        "TMP-TN-147T", "Future tenancy plan briefing note"
        ];
        $templates[] = [
        "TMP-TN-148T", "Order of Possession letter to tenant legal outcome"
        ];
        $templates[] = [
        "TMP-TN-149T", "VCAT Hearing Outcome Letter"
        ];
        $templates[] = [
        "TMP-TN-150T", "Breach of Duty Notice Cover Letter"
        ];
        $templates[] = [
        "TMP-TN-151T", "Internal - 48 Hour Brief Notice of Pending Eviction"
        ];
        $templates[] = [
        "TMP-TN-152T", "Internal - Warrant for Eviction Briefing Note"
        ];
        $templates[] = [
        "TMP-TN-153T", "(Days) Notice to Vacate Cover Letter - disputes"
        ];
        $templates[] = [
        "TMP-TN-154T", "Renewal of Proceedings Letter"
        ];
        $templates[] = [
        "TMP-TN-155T", "Warrant Outcome"
        ];
        $templates[] = [
        "TMP-TN-156T01", "Letter before Warrant Application"
        ];
        $templates[] = [
        "TMP-TN-156T", "Letter before Warrant Application"
        ];
        $templates[] = [
        "TMP-TN-157T", "Notice to Vacate - Arrears Letter"
        ];
        $templates[] = [
        "TMP-TN-158T", "Summary Of Proofs - Order"
        ];
        $templates[] = [
        "TMP-TN-159T", "Summary of Proofs - Bond-Compensation"
        ];
        $templates[] = [
        "TMP-TN-160T00", "Tenancy Dispute Diary Sheet"
        ];
        $templates[] = [
        "TMP-TN-160T", "Tenancy Dispute Diary Sheet"
        ];
        $templates[] = [
        "TMP-TN-161T", "Letter to Complainant"
        ];
        $templates[] = [
        "TMP-TN-162T", "Advice no OoH tenant involved"
        ];
        $templates[] = [
        "TMP-TN-163T", "Complaint Outcome Letter Unsubstantiated"
        ];
        $templates[] = [
        "TMP-TN-164T", "Complaint Outcome Letter Substantiated"
        ];
        $templates[] = [
        "TMP-TN-165T", "Request to Contact OoH"
        ];
        $templates[] = [
        "TMP-TN-166T", "Request to person making complaint Contact OoH"
        ];
        $templates[] = [
        "TMP-TN-167T", "Complied with Breach or Compliance Notice"
        ];
        $templates[] = [
        "TMP-TN-168T", "Support Agency referral to accompany breach notice"
        ];
        $templates[] = [
        "TMP-TN-169T", "Summary Of Proofs - Possession/Abandonment/Vacation"
        ];
        $templates[] = [
        "TMP-TN-171T", "Termination of Tenancy letter"
        ];
        $templates[] = [
        "TMP-TN-172T", "Termination of Tenancy Letter (Deceased Tenant)"
        ];
        $templates[] = [
        "TMP-TN-173T00", "Intention to Vacate Form / General termination Notice includes vacating instructions"
        ];
        $templates[] = [
        "TMP-TN-173T08", "Intention to Vacate Form / General termination Notice includes vacating instructions"
        ];
        $templates[] = [
        "TMP-TN-174T", "IVAC Acknowledgement"
        ];
        $templates[] = [
        "TMP-TN-175T", "Referral to State Trustees re deceased tenant"
        ];
        $templates[] = [
        "TMP-TN-177T", "Request for Written advice of death of tenant from NOK"
        ];
        $templates[] = [
        "TMP-TN-178T", "Notification of death by LPR or NOK"
        ];
        $templates[] = [
        "TMP-TN-179T", "LPR declaration re outstanding charges"
        ];
        $templates[] = [
        "TMP-TN-180T", "LPR Declaration re outstanding charges-Form"
        ];
        $templates[] = [
        "TMP-TN-181T", "Non Approval of request to change tenancy termination date"
        ];
        $templates[] = [
        "TMP-TN-182T", "Approval of request to change tenancy termination date"
        ];
        $templates[] = [
        "TMP-TN-183T06", "Internal - Form 4 - Notice to Respondent"
        ];
        $templates[] = [
        "TMP-TN-184T00", "Tenancy Condition Report"
        ];
        $templates[] = [
        "TMP-TN-184T", "Tenancy Condition Report"
        ];
        $templates[] = [
        "TMP-TN-185T", "Key Register Receipt"
        ];
        $templates[] = [
        "TMP-TN-186T06", "Internal - Affidavit of Application - Illegal Occupants"
        ];
        $templates[] = [
        "TMP-TN-187T00", "Internal - Authority of Owner of Property"
        ];
        $templates[] = [
        "TMP-TN-188T00", "Advice to Illegal occupant to vacate & attestation"
        ];
        $templates[] = [
        "TMP-TN-188T06", "Advice to Illegal occupant to vacate & attestation"
        ];
        $templates[] = [
        "TMP-TN-189T00", "Abandoned Goods Communal Area notification"
        ];
        $templates[] = [
        "TMP-TN-194T00", "Notice of retained personal documents"
        ];
        $templates[] = [
        "TMP-TN-195T00", "Notice to Removalist and Storage"
        ];
        $templates[] = [
        "TMP-TN-196T00", "Notice to former tenant - goods left behind"
        ];
        $templates[] = [
        "TMP-TN-197T00", "Goods Left Behind - Forwarding address unknown (newspaper)"
        ];
        $templates[] = [
        "TMP-TN-198T00", "Auction Advertisement Notice"
        ];
        $templates[] = [
        "TMP-TN-199T00", "Internal - Unauthorised Person(s) Action Sheet"
        ];
        $templates[] = [
        "TMP-TN-199T07", "Internal - Unauthorised Person(s) Action Sheet"
        ];
        $templates[] = [
        "TMP-TN-200T00", "Internal - Unauthorised Person(s) Information Sheet"
        ];
        $templates[] = [
        "TMP-TN-200T07", "Internal - Unauthorised Person(s) Information Sheet"
        ];
        $templates[] = [
        "TMP-TN-201T00", "Advice to Illegal occupant to vacate the property"
        ];
        $templates[] = [
        "TMP-TN-201T06", "Advice to Illegal occupant to vacate the property"
        ];
        $templates[] = [
        "TMP-TN-202T00", "Internal - Statement of Formal Demand"
        ];
        $templates[] = [
        "TMP-TN-203T00", "Internal - Consumer Affairs Victoria, Application to Inspect Abandoned Goods"
        ];
        $templates[] = [
        "TMP-TN-204T00", "Advice to Illegal occupant to vacate"
        ];
        $templates[] = [
        "TMP-TN-204T06", "Advice to Illegal occupant to vacate"
        ];
        $templates[] = [
        "TMP-TN-210T", "Termination of Direct Debit (termination of tenancy)"
        ];
        $templates[] = [
        "TMP-TN-211T00", "Bank Direct Debit form"
        ];
        $templates[] = [
        "TMP-TN-211T01", "Bank Direct Debit form"
        ];
        $templates[] = [
        "TMP-TN-211TDD", "Bank Direct Debit form"
        ];
        $templates[] = [
        "TMP-TN-212T", "Advice to client that OoH has received 1st RDS payment"
        ];
        $templates[] = [
        "TMP-TN-213T", "Advice to tenant that Centrelink is unable to send fortnightly rent"
        ];
        $templates[] = [
        "TMP-TN-214T", "Change to deduction amount letter"
        ];
        $templates[] = [
        "TMP-TN-215TDD01", "Notification of cancelled direct debit"
        ];
        $templates[] = [
        "TMP-TN-215TDD02", "Notification of cancelled direct debit"
        ];
        $templates[] = [
        "TMP-TN-216T", "Notification to client of direct debit arrangement through their financial institution"
        ];
        $templates[] = [
        "TMP-TN-217T", "Automatic updating of direct debit amount"
        ];
        $templates[] = [
        "TMP-TN-218T", "Notification to tenant to change in date pensions received will affect payment received (PPC)"
        ];
        $templates[] = [
        "TMP-TN-220T04", "Dishonoured payment received"
        ];
        $templates[] = [
        "TMP-TN-220TDD", "Dishonoured payment received"
        ];
        $templates[] = [
        "TMP-TN-221T", "Notification of suspended rent deduction"
        ];
        $templates[] = [
        "TMP-TN-226T", "Confirmation of registration for Centrelink RDS"
        ];
        $templates[] = [
        "TMP-TN-231T", "Client dishonour 3 consecutive direct debits"
        ];
        $templates[] = [
        "TMP-TN-232T", "Notification of suspension due to error in banking details"
        ];
        $templates[] = [
        "TMP-TN-233T", "Dishonoured Cheque Letter"
        ];
        $templates[] = [
        "TMP-TN-234T", "Refund letter"
        ];
        $templates[] = [
        "TMP-TN-235T", "Car-Parking - Bay Agreement"
        ];
        $templates[] = [
        "TMP-TN-236T", "Car-Parking - Car Park has been removed."
        ];
        $templates[] = [
        "TMP-TN-237T", "Car-Parking - Cancellation of a car Parking Agreement"
        ];
        $templates[] = [
        "TMP-TN-238T", "Car-Parking - Ineligible for a Car Park bay"
        ];
        $templates[] = [
        "TMP-TN-239T", "Car-Parking - Offer Of a Bay"
        ];
        $templates[] = [
        "TMP-TN-240T01", "Car-Parking - Application for a Car parking bay"
        ];
        $templates[] = [
        "TMP-TN-240T00", "Car-Parking - Application for a Car parking bay"
        ];
        $templates[] = [
        "TMP-TN-240TCL06", "Car-Parking - Application for a Car parking bay"
        ];
        $templates[] = [
        "TMP-TN-241T", "Car-Parking - Incomplete application"
        ];
        $templates[] = [
        "TMP-TN-242T", "Car-Parking - Approved to the waiting list"
        ];
        $templates[] = [
        "TMP-TN-243T", "Car-Parking -external party assigned bay"
        ];
        $templates[] = [
        "TMP-TN-244T", "Car-Parking - external party Ineligible for a Car Park bay"
        ];
        $templates[] = [
        "TMP-TN-245T", "Car-Parking - external party Car Park bay cancelled"
        ];
        $templates[] = [
        "TMP-TN-246TCL06", "Application for a Car parking bay - external party"
        ];
        $templates[] = [
        "TMP-TN-246T00", "Application for a Car parking bay - external party"
        ];
        $templates[] = [
        "TMP-TN-247T00", "Relocation follow-up letter"
        ];
        $templates[] = [
        "TMP-TN-248T00", "Relocation returning 1 month letter"
        ];
        $templates[] = [
        "TMP-TN-249T00", "Relocation returning 3 month letter"
        ];
        $templates[] = [
        "TMP-TN-250T00", "Internal - Tenancy Reference Background Checklist"
        ];
        $templates[] = [
        "TMP-TN-251T00", "Good Standing Letter"
        ];
        $templates[] = [
        "TMP-TN-252T00", "Acknowledgement Letter"
        ];
        $templates[] = [
        "TMP-TN-254T00", "Internal/external Work Permit Application"
        ];
        $templates[] = [
        "TMP-TN-256T00", "Internal - Disability Modification"
        ];
        $templates[] = [
        "TMP-TN-257T00", "Internal - Quotation Summary Sheet"
        ];
        $templates[] = [
        "TMP-TN-258T00", "Highrise - Intercom Operations"
        ];
        $templates[] = [
        "TMP-TN-259T00", "Highrise - Intercom Swipe Card request"
        ];
        $templates[] = [
        "TMP-TN-260T", "Departing Tenant - with a Debt on Current account"
        ];
        $templates[] = [
        "TMP-TN-260AT", "Remaining Tenant - confirmation of removal of departing tenant (when debt on account)"
        ];
        $templates[] = [
        "TMP-TN-261T0202", "Sole Tenant Temporary Absence - Fifth Month advice"
        ];
        $templates[] = [
        "TMP-TN-261T0204", "Sole Tenant Temporary Absence - Fifth Month advice"
        ];
        $templates[] = [
        "TMP-TN-262T0202", "Sole Occupant - Not returning after approved temporary absence period over 6 months"
        ];
        $templates[] = [
        "TMP-TN-262T0204", "Sole Occupant - Not returning after approved temporary absence period over 6 months"
        ];
        $templates[] = [
        "TMP-TN-263T00", "Temporary Absence Form"
        ];
        $templates[] = [
        "TMP-TN-263T0202", "Temporary Absence Form"
        ];
        $templates[] = [
        "TMP-TN-263T0204", "Temporary Absence Form"
        ];
        $templates[] = [
        "TMP-TN-266T", "Debt Cleared"
        ];
        $templates[] = [
        "TMP-TN-274T00", "Internal - Five day notice for abandoned vehicle"
        ];
        $templates[] = [
        "TMP-TN-275T00", "advice letter to auction House of auction of goods"
        ];
        $templates[] = [
        "TMP-TN-276AT", "Rental and Maintenance Summary Statement"
        ];
        $templates[] = [
        "TMP-TN-276CT", "Rental Only Summary Statement"
        ];
        $templates[] = [
        "TMP-TN-276ET", "Maintenance Statement"
        ];
        $templates[] = [
        "TMP-TN-276FT", "Rental and Maintenance Summary Vacated Statement"
        ];
        $templates[] = [
        "TMP-TN-276HT", "Rental Summary Vacated Statement"
        ];
        $templates[] = [
        "TMP-TN-276JT", "Maintenance Only Vacated Statement"
        ];
        $templates[] = [
        "TMP-TN-276KT", "Bond Account Statement"
        ];
        $templates[] = [
        "TMP-TN-277T01", "Payment slip - rent"
        ];
        $templates[] = [
        "TMP-TN-278T", "Refund letter"
        ];
        $templates[] = [
        "TMP-TN-279T00", "Rent deduction service cancellation form"
        ];
        $templates[] = [
        "TMP-TN-279TDD", "Rent deduction service cancellation form"
        ];
        $templates[] = [
        "TMP-TN-280T", "Complied with compliance order"
        ];
        $templates[] = [
        "TMP-TN-282T", "Change in BSB number"
        ];
        $templates[] = [
        "TMP-TN-283T", "Cheque Receipt Declaration Form"
        ];
        $templates[] = [
        "TMP-TN-284T", "Notification from Centrelink of cancelled (or suspended) benefit (PBC or PBS)"
        ];
        $templates[] = [
        "TMP-TN-285T", "Cover Letter - Notice to Vacate for Non arrears or dispute."
        ];
        $templates[] = [
        "TMP-TN-286T", "Notification to client of Unclaimed Monies sent to State Revenue Office"
        ];
        $templates[] = [
        "TMP-TN-287T", "Notification to client of Unclaimed Monies sent to State Revenue Office - Deceased Estate"
        ];
        $templates[] = [
        "TMP-TN-288T00", "Subsidy Application Form"
        ];
        $templates[] = [
        "TMP-TN-288T0202", "Subsidy Application Form"
        ];
        $templates[] = [
        "TMP-TN-288T0204", "Subsidy Application Form"
        ];
        $templates[] = [
        "TMP-TN-289T0204", "Notification of subsidy allocation letter - Not approved"
        ];
        $templates[] = [
        "TMP-TN-299T", "late payment letter"
        ];
        $templates[] = [
        "TMP-TN-300T", "final broken agreement letter"
        ];
        $templates[] = [
        "TMP-TN-301T00", "Internal - Client Support Plan"
        ];
        $templates[] = [
        "TMP-TN-304T", "Remove a sleep out charge"
        ];
        $templates[] = [
        "TMP-TN-305T", "Remove a service charge"
        ];
        $templates[] = [
        "TMP-TN-306T", "Vacated Debt Agreement invite to add an additional debt"
        ];
        $templates[] = [
        "TMP-TN-307T", "1st rebate cancellation reminder letter"
        ];
        $templates[] = [
        "TMP-TN-308T", "Final rebate cancellation reminder letter"
        ];
        $templates[] = [
        "TMP-TN-309T00", "Internal - Housing and Support Plan"
        ];
        $templates[] = [
        "TMP-TN-001T", "Advice letter of Consent to Support Worker tenancy"
        ];
        $templates[] = [
        "TMP-TN-126T", "Order of Possession - revised"
        ];
        $templates[] = [
        "TMP-TN-183T08", "Internal - Form 4 - Notice to Respondent"
        ];
        $templates[] = [
        "TMP-TN-184T", "Tenancy Condition Report"
        ];
        $templates[] = [
        "TMP-TN-186T00", "Internal - Affidavit of Application - Illegal Occupants"
        ];
        $templates[] = [
        "TMP-TN-186T07", "Internal - Affidavit of Application - Illegal Occupants"
        ];
        $templates[] = [
        "TMP-TN-187T07", "Internal - Authority of Owner of Property"
        ];
        $templates[] = [
        "TMP-TN-190T00", "Abandoned vehicle details form"
        ];
        $templates[] = [
        "TMP-TN-191T00", "Certificate of Ownership Request - VICROADS"
        ];
        $templates[] = [
        "TMP-TN-192T00", "Registered Owner to remove Vehicle Letter"
        ];
        $templates[] = [
        "TMP-TN-193T00", "Registered Owner advice of removal of Vehicle Letter"
        ];
        $templates[] = [
        "TMP-TN-253T00", "Maintenance - Fencing Repayment Agreement"
        ];
        $templates[] = [
        "TMP-TN-255T00", "Fencing Letter"
        ];
        $templates[] = [
        "TMP-TN-276BT", "Rental and Maintenance Detailed Statement"
        ];
        $templates[] = [
        "TMP-TN-276DT", "Rental Only Detailed Statement"
        ];
        $templates[] = [
        "TMP-TN-276GT", "Rental and Maintenance Detailed Vacated Statement"
        ];
        $templates[] = [
        "TMP-TN-276IT", "Rental Detailed Vacated Statement"
        ];
        $templates[] = [
        "TMP-TN-276LT", "Statement Generated by Australia Post"
        ];
        $templates[] = [
        "TMP-TN-277T00", "Payment slip - rent"
        ];
        $templates[] = [
        "TMP-TN-281T", "General Claim Form"
        ];
        $templates[] = [
        "TMP-TN-290T", "Vacated account debt letter"
        ];
        $templates[] = [
        "TMP-TN-302T00", "SHASP Fact Sheet"
        ];
        $templates[] = [
        "TMP-TN-303T00", "SHASP Fact Sheet"
        ];
        $templates[] = [
        "TMP-TN-MR-001T", "Market rent increase and pending rebate cancellation"
        ];
        $templates[] = [
        "TMP-TN-MR-002T", "Market rent decrease and pending rebate cancellation"
        ];
        $templates[] = [
        "TMP-TN-MR-003T", "Market rent increase and rebated rent increase"
        ];
        $templates[] = [
        "TMP-TN-MR-004T", "Market rent increase and rebated rent decrease"
        ];
        $templates[] = [
        "TMP-TN-MR-005T", "Market rent increase and rebated rent no change"
        ];
        $templates[] = [
        "TMP-TN-MR-006T", "Market rent no change and rebated rent increase"
        ];
        $templates[] = [
        "TMP-TN-MR-007T", "Market rent no change and rebated rent decrease"
        ];
        $templates[] = [
        "TMP-TN-MR-008T", "Market rent no change and rebated rent no change"
        ];
        $templates[] = [
        "TMP-TN-MR-009T", "Market rent decrease and rebated rent increase"
        ];
        $templates[] = [
        "TMP-TN-MR-010T", "Market rent decrease and rebated rent decrease"
        ];
        $templates[] = [
        "TMP-TN-MR-011T", "Market rent decrease and rebated rent no change"
        ];
        $templates[] = [
        "TMP-TN-MR-012T", "Market rent increase and no longer eligible for rebate"
        ];
        $templates[] = [
        "TMP-TN-MR-013T", "Market rent no change and no longer eligible for rebate"
        ];
        $templates[] = [
        "TMP-TN-MR-014T", "Market rent decrease and no longer eligible for rebate"
        ];
        $templates[] = [
        "TMP-TN-MR-015T", "Market rent increase"
        ];
        $templates[] = [
        "TMP-TN-MR-016T", "Market rent decrease"
        ];
        $templates[] = [
        "TMP-TN-MR-017T", "Rebated renter with market rent increase and not processed by AFRR"
        ];
        $templates[] = [
        "TMP-TN-MR-018T", "Rebated renter with market rent decrease and not processed by AFRR"
        ];
        $templates[] = [
        "TMP-TN-ICDD-001T", "IC Dependant Discrepancy and market rent decrease"
        ];
        $templates[] = [
        "TMP-TN-ICDD-002T", "IC Dependant Discrepancy and market rent increase"
        ];
        $templates[] = [
        "TMP-TN-ICDD-003T", "Dependant Discrepancy and no change to market rent"
        ];
        $templates[] = [
        "TMP-TN-ICDO-001T", "IC Error/Discrepancy Other and market rent decrease"
        ];
        $templates[] = [
        "TMP-TN-ICDO-002T", "IC Error/Discrepancy Other and market rent increase"
        ];
        $templates[] = [
        "TMP-TN-ICDO-003T", "IC Error/Discrepancy Other and no change to market rent"
        ];
        $templates[] = [
        "TMP-TN-334T", "Direct debit payment schedule for current period"
        ];
        $templates[] = [
        "TMP-TN-335T00", "Rebate Application Guide"
        ];
        $templates[] = [
        "TMP-TN-335T01", "Rebate Application Guide"
        ];
        $templates[] = [
        "TMP-TN-1336T", "Cost of Repairs Notice for a vacated tenancy"
        ];
        $templates[] = [
        "TMP-TN-337T", "Refund letter (adhoc)"
        ];
        $templates[] = [
        "TMP-TN-338T", "Unclaimed monies letter (adhoc)"
        ];
        $templates[] = [
        "TMP-TN-339T", "Blank arrears agreement and cover letter"
        ];
        $templates[] = [
        "TMP-TN-340T", "Vacated Account Debt reminder letter (adhoc)"
        ];
        $templates[] = [
        "TMP-TN-MR-020T", "Market Rent Decrease"
        ];
        $templates[] = [
        "TMP-TN-MR-021T", "Market Rent Increase"
        ];
        $templates[] = [
        "TMP-TN-MR-022T", "Market Rent No Change"
        ];
        $templates[] = [
        "TMP-TN-XXX", "Tenancy Summary"
        ];
        return $templates;
    }
}
