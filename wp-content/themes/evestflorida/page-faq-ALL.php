<?php
/*
Template Name: FAQs PAGE ALL
*/
?>
<!-- override some styling -->
<style>
.container .eleven.columns {
	width: 96% !important;
}
.ui-accordion-content{
	height: auto !important; 
}
</style>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>

<!-- init accordian for faq -->
<script>
  $(function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  });
</script>

<?php get_header(); ?>

<div id="left" class="eleven columns" >
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="title">
				<h2><a title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			</div>
		
			<div class="entry">
			<!--<?php the_content('Read the rest of this entry &raquo;'); ?>-->
<div id="accordion"><!-- START GENERAL FAQS ACCORDION -->
<h3>What is E|VEST Florida?</h3>
<div>
<p>E|VEST Florida is a program offered through the Florida PACE (“Property Assessed Clean Energy”) Funding Agency that provides up to 100% financing to property owners for “Qualifying Improvements” associated with energy conservation and efficiency, renewable energy, and wind resistance.</p>
<p>
The Agency was created June 2011 and is an independent legal entity, public body and unit of local Florida government formed through cooperation between Flagler County and the City of Kissimmee. All its activities are fully transparent and subject to Florida Sunshine Laws.</p>
</div>


<h3>How is E|VEST Florida financing repaid?</h3>
<div>
<p>E|VEST Florida financing is repaid through a special non-ad valorem assessment included on the annual property tax bill. The E|VEST Florida repayment obligation either transfers to subsequent owners with the title or is paid off as a condition of sale.</p>
</div>

<h3>Can Qualifying Improvements be installed by the property owner?</h3>
<div>
<p>Yes. Only material and equipment associated with the qualifying improvements are eligible for E|VEST Florida financing.</p>
</div>

<h3>How many proposals should the property owner obtain?</h3>
<div>
<p>It is generally best practice to obtain at least three proposals before awarding a contract for any home improvements.</p>
</div>

<h3>Which qualifying improvements are eligible for E|VEST Florida financing?</h3>
<div>
<p>Qualifying improvements eligible for E|VEST Florida financing may include but are subject to approval:</p>
<ul>
<li>air sealing;</li>
<li>installation of insulation;</li>
<li>installation of energy-efficient heating, cooling, or ventilation systems;</li>
<li>building modifications to increase the use of daylight;</li>
<li>replacement of windows;</li>
<li>installation of energy controls or energy recovery systems;</li>
<li>installation of electric vehicle charging equipment; or</li>
<li>installation of efficient lighting equipment.</li>
</ul>
<p>Renewable energy improvements, including installation of any system in which the electrical, mechanical, or thermal energy is produced using one or more of the following fuels or energy sources: hydrogen, solar, geothermal, bio, and wind.</p>
<p>Wind resistance improvements, including, but not limited to:</p>
<ul>
<li>improving the strength of the roof deck attachment;</li>
<li>creating a secondary water barrier to prevent water intrusion;</li>
<li>installing wind-resistant shingles;</li>
<li>installing gable-end bracing;</li>
<li>reinforcing roof-to-wall connections;</li>
<li>installing storm shutters; or</li>
<li>installing opening protections.</li>
</ul>
<p>For additional information on qualifying improvements please refer to Section 163.08(2)(b) of the Florida Statutes.</p>
<p>E|VEST Florida financing is available solely for Qualifying Improvements. Property owners must make alternative funding arrangements for the cost associated with non-Qualifying  Improvements.</p>
</div>

<h3>Who is eligible to receive E|VEST Florida financing?</h3>
<div>
<p>To be eligible, the financing property owners must:</p>
<ul>
<li>Be the owner of record of a property located within the jurisdiction of a subscribing local government;</li>
<li>Be current on property taxes and mortgage(s) for the past three (3) years;</li>
<li>Not have filed for bankruptcy in the last five (5) years; and</li>
<li>Have equity in the property.</li>
<p>In addition, the subject property must be free of involuntary liens.</p>
</ul>
</div>

<h3>What types of properties are eligible for Qualifying Improvements funded through E|VEST Florida?</h3>
<div>
<p>E|VEST Florida is open to most property types including residential, commercial and industrial, among others.</p>
</div>

<h3>Is the property owner’s credit score used to determine program eligibility?</h3>
<div>
<p>The property owner’s credit score is not used for purposes of eligibility screening for E|VEST Florida financing. Rather, eligibility is determined based on the market value of the property, including the E|VEST Florida repayment obligation that would either be passed on to subsequent owners with title transfer or paid off as a condition of sale.</p>
</div>

<h3>What value of Qualifying Improvements may a property owner finance through E|VEST Florida?</h3>
<div>
<p>The total dollar amount of Qualifying Improvements that may be financed through the E|VEST Florida program is 20% of the assessed on record with the corresponding local government property appraiser. Please note: additional work required to correct building systems that have a direct impact on the proper installation or functioning of a Qualifying  Improvement may only be made prior to the execution of the financing agreement.</p>
<p>Once funding for a project is committed and an associated lien placed on the property, any additions to the initial scope of work could require a separate application or alternative funding for the additional work.</p>
</div>

<h3>Who may provide Qualifying Improvements under E|VEST Florida?</h3>
<div>
<p>Qualifying Improvements may be made by E|VEST Florida Authorized Contractors and property owners that self install Qualifying Improvements. To the extent that a contractor, multiple contractors and/or subcontractors, are involved in an E|VEST Florida project, each must be an authorized contractor.</p>
</div>

<h3>What is the process for an E|VEST Florida financed project?</h3>
<div>
<p>Step 1. Determine Eligibility for E|VEST Florida financing.</p>
<p>The first step is to prequalify the subject property for E|VEST Florida financing. To prequalify, the property must be within a county or city that subscribes to the E|VEST Florida program. The property owner uses an online tool available through the E|VEST Florida website that instantly confirms correct jurisdiction and generates an estimated maximum financing amount based on 20% of the property’s assessed value (as determined by the local tax assessor and recorded on official county property record). The estimated maximum financing potentially available for the property is shown on the screen and a hard copy of an official Prequalification Letter can be printed and presented to prospective contractors as evidence of eligibility.</p>
<p>Step 2. Obtain Contractor Estimates</p>
<p>The next step is to select which Qualifying Improvements might be appropriate for a property by requesting a utility-sponsored energy audit and consulting with an E|VEST Florida authorized contractor or other subject matter experts concerning the feasibility of desired improvements. Any cost for the energy audit is an eligible cost that can be included in the financing. The property owner should review the list of Qualifying Improvements available (LINK TO SECTION) or Section 163.08(2)(b) of the Florida Statutes.</p>
<p>Improvements not included on the list may be determined eligible subject to approval of E|VEST Florida.</p>
<p>Once Qualifying Improvements have been selected, the Property Owner should obtain a proposal from 2 or 3 E|VEST Florida Authorized Contractors or provide a description of the Qualifying Improvements that will be owner-installed for review and approval by the E|VEST Florida.  Each Authorized Contractor has been trained to provide a project proposal(s) using a predetermined format that identifies all cost, labor and material elements and estimated energy savings associated with installation of the Improvements.</p>
<p>Only Qualifying Improvements and associated costs may be financed through E|VEST Florida. For energy efficiency improvements, an estimate of energy savings resulting from installation of the proposed Qualifying Improvement(s) will be included. More strict building simulation requirements apply in the case of non-residential property owners attempting to secure financing above the 20% of the assessed value threshold or in the case of building envelope changes. (NEED CLARIFICATION) If the Property Owner retains an approved energy auditor to prepare an energy savings estimate, the audit must identify potential improvements as the basis of the contractor proposal.  The cost of an energy audit may be included in the total cost of Qualifying Improvements.</p>
<p>Step 3. Submit a Formal Application</p>
<p>The Property Owner will submit a formal application to the E|VEST Florida program and pay is a non-refundable application fee ($25 residential and $50 commercial).  Once accepted into the E|VEST Florida program, the Property Owner will be sent a confirmation by mail.  At the same time, the mortgage lender (if any) is advised of the amount of the potential PACE assessment based on the accepted contractor proposal. This lender advice is required 30 days before closing to allow the lender the right to adjust the escrow portion of the mortgage payment to spread the annual assessment over 12 monthly payments rather than one annual payment.</p>
<p>Once all application documents received and reviewed (application form, application fee, selected contractor proposal, waiver to obtain a credit report), the entire project package will be reviewed for compliance with all statutory criteria.  This underwriting process is an in-depth review that includes verification of project documentation, contractor credentials (if applicable) and property information.  Underwriting usually takes 5 days or less. Upon successful completion of the underwriting process, the Property Owner’s project receives funding and a closing date will be scheduled. Documents authorizing E|VEST Florida the placement of a special assessment on the corresponding property tax bill will be executed at closing.  When the financing agreement is recorded with the county clerk, the property owner and the contractor will be issued a notice to proceed with construction.  A contractor and property owner may begin work prior to a notice to proceed, but do so at their own risk.</p>
<p>Step 4. Construction and Final Payment</p>
<p>E|VEST Florida provides protection to the Property Owner by holding final payment to the Authorized Contractor until the Property Owner is satisfied that the work is complete.</p>
<p>Before the lien is placed the Property Owner must approve all work and authorize payment to the contractor.</p>
</div>

<h3>What protections are in place for me as a Property Owner under E|VEST Florida?</h3>
<div>
<p>First, all Qualifying Improvements must be made by E|VEST Florida Authorized Contractors or the property owner ensuring the work is being performed by a professionally licensed, insured and qualifying contractor. Second, all Qualifying Improvements requiring building permits ensure compliance with all applicable codes through mandatory inspections by local building officials. Finally, contractor payment will not be made until the Property Owner is satisfied that the bid work is complete.</p>
<p>As an added benefit to Property Owners making energy efficiency improvements to their properties, they may decide to include the cost of getting a current energy rating for the property from a certified/licensed Energy Rater to compare with the estimated energy rating following completion of Qualifying Improvements.</p>
</div>

<h3>What protections are in place for me as a Property Owner under E|VEST Florida?</h3>
<div>
<p>First, all Qualifying Improvements must be made by E|VEST Florida Authorized Contractors or the property owner ensuring the work is being performed by a professionally licensed, insured and qualifying contractor. Second, all Qualifying Improvements requiring building permits ensure compliance with all applicable codes through mandatory inspections by local building officials. Finally, contractor payment will not be made until the Property Owner is satisfied that the bid work is complete.</p>
<p>As an added benefit to Property Owners making energy efficiency improvements to their properties, they may decide to include the cost of getting a current energy rating for the property from a certified/licensed Energy Rater to compare with the estimated energy rating following completion of Qualifying Improvements.</p>
</div>

<h3>What credentials do E|VEST Florida Authorized Contractors possess?</h3>
<div>
<p>E|VEST Florida Authorized Contractors must meet minimum requirements established by the program including possessing all required federal, state, and local licenses, certifications, and registrations and insurance. For more information on these requirements please refer to the E|VEST Florida Contractor FAQs.</p>
</div>

<h3>What if I already have a contractor that I trust, but the contractor is not an E|VEST Florida Authorized Contractor?</h3>
<div>
<p>E|VEST Florida welcomes property owners that encourage their selected contractors to become program authorized.  The application process is a simple, streamlined process that requires a licensed contractor to complete an application and pay a one-time annual administrative fee of $50. Upon becoming an E|VEST Florida Authorized Contractor, the selected contractor will be listed in the program directory and receive full access to E|VEST Florida financing to grow his or her business.</p>
</div>

<h3>What if the approved E|VEST Florida financing amount comes back less than the amount of the bid I select?</h3>
<div>
<p>Tier 1 financing levels are limited to no more than 20% of the assessed value of the property. If the total cost of the Qualifying Improvements exceeds 20% of the property’s assessed value, E|VEST Florida financing is available only if an energy analysis prepared by a licensed design professional indicates that the annual savings is at least equal to the annual assessment. For more information on the additional requirements for receiving E|VEST Florida financing more than 20% of the property’s assessed value, please refer to the Contractor FAQs (LINK TO SECTION) or call 1-866-558-3180.</p>
</div>

<h3>What if the approved E|VEST Florida financing amount comes back less than the amount of the bid I select?</h3>
<div>
<p>Tier 1 financing levels are limited to no more than 20% of the assessed value of the property. If the total cost of the Qualifying Improvements exceeds 20% of the property’s assessed value, E|VEST Florida financing is available only if an energy analysis prepared by a licensed design professional indicates that the annual savings is at least equal to the annual assessment. For more information on the additional requirements for receiving E|VEST Florida financing more than 20% of the property’s assessed value, please refer to the Contractor FAQs (LINK TO SECTION) or call 1-866-558-3180.</p>
</div>

<h3>What happens if the E|VEST Florida authorized contractor begins work on the Qualifying Improvement and discovers additional work that must be done in order to complete the project?</h3>
<div>
<p>The bid may be altered to accommodate the additional work necessary, but the original financing will remain unchanged. Once the E|VEST Florida funding is approved, it may not be increased or reduced. The Property Owner could submit another funding application to E|VEST Florida or make alternative funding arrangements.</p>
<ul>
<li>Residential</li>	
<li>Residential Application</li>
<li>Residential Terms and Conditions</li>
</ul>
</div>

</div><!-- /END GENERAL FAQS ACCORDION -->



<div id="accordion"><!-- START CONTRACTOR FAQS ACCORDION -->
<h3>What is required to become an E|VEST Florida Authorized Contractor?</h3>
<div>
<p>E|VEST Florida Authorized Contractors must meet the following Minimum Requirements:</p>
<ul>
<li>Possess all valid licenses, certifications and registrations (federal, state, and and local) legally required to make the Qualifying Improvement(s);</li>
<li>Satisfy worker’s compensation requirements; and</li>
<li>Satisfy other federal, state and local requirements associated with the Qualifying Improvement(s).</li>
</ul>
</div>

<h3>How do I become an E|VEST Florida Authorized Contractor?</h3>
<div>
<p>To become an Authorized Contractor, interested Florida contractors must:</p>
<ul>
<li>Comply with the E|VEST Florida Minimum Requirements;</li>
<li>Submit a completed E|VEST Florida Contractor Application that can be obtained from any subscribing local government’s building department, downloaded from  (LINK) or requested from E|VEST Florida at 1-800-FL-EVEST (1-800-353-8378);</li>
<li>Pay a one-time administrative fee of $50; and</li>
<li>Agree to adhere to the E|VEST Florida Code of Conduct, a copy of which can be obtained online HERE or by calling at 1-800-FL-EVEST (1-800-353-8378).</li>
</ul>
</div>

<h3>How do I pay my E|VEST Florida Authorized Contractor application fee?</h3>
<div>
<p>The non-refundable $50 E|VEST Florida Authorized Contractor application fee may be paid in the following ways:</p>
<ul>
<li>Online HERE.</li>
<li>By mailing your completed application and a check (please indicate Contractor Application Fee on the memo line) made payable to “SEE&I” to:</li>
</ul>
<p>SAIC – PACE Processing</p>
<p>1000 Legion Place</p>
<p>Suite 1265</p>
<p>Orlando, Florida 32801</p>
</div>

<h3>How will I know that my application to become an E|VEST Florida Authorized Contractor has been approved?</h3>
<div>
<p>Upon successful verification of credentials, E|VEST Florida will mail a Certificate validating your status as an Authorized Contractor to the contact address listed in your application and activate your profile here in the Authorized Contractor Directory (LINK).  Applications are generally processed within one week of receipt.</p>
<p>Are there any additional mandatory costs to maintain my status as an E|VEST Florida Authorized Contractor?</p>
<p>No, not at this time.</p>
</div>

<h3>What are the benefits of being an E|VEST Florida Authorized Contractor?</h3>
<div>
<p>Authorized Contractors automatically receive a Basic listing in the Directory that includes:</p>
<ul>
<li>Contractor name;</li>
<li>License Number(s);</li>
<li>DBA designation;</li>
<li>Address; and</li>
<li>Service offerings.</li>
</ul>
<p>The Basic Listing of E|VEST Florida Authorized Contractors is searchable by local government (i.e., County, City, etc.). In addition to the Basic Listing, Authorized Contractors are eligible to work on E|VEST Florida funded projects and have access to:</p>
<ul>
<li>Training on the E|VEST Florida program;</li>
<li>Marketing collateral (additional fees may apply);</li>
<li>On-line web resources, including personal web site;</li>
<li>Listing in an on-line directory of Authorized Contractors; and</li>
<li>Sponsorship opportunities resulting in additional visibility through web-based and marketing collateral.</li>
</ul>
</div>

<h3>How do I get a job installing Qualifying Improvements?</h3>
<div>
<p>After you become an E|VEST Florida Authorized Contractor, you will be listed in the online Contractor Directory. This directory is used by property owners seeking an Authorized Contractor to perform Qualifying Improvements. In addition, educating your existing clients about E|VEST Florida financing may help you initiate additional jobs.</p>
</div>

<h3>What is the process for obtaining E|VEST Florida financing for a project?</h3>
<div>
<p>The following are the general steps to obtain E|VEST Florida financing for a project:</p>
<p>Step 1. Qualifying Improvement(s) Selection</p>
<p>The first step to participating in E|VEST Florida is to decide which Qualifying Improvements might be appropriate for a property.  The Property Owner should review the list of Qualifying Improvements available HERE or Section 163.08(2)(b) of the Florida Statutes and, as needed, request a utility-sponsored energy audit, or consult E|VEST Florida Authorized Contractors or other subject matter experts concerning the feasibility of desired improvements.</p>
<p>Step 2. Property Prequalification</p>
<p>The next step is to prequalify the subject property for E|VEST Florida financing.  To prequalify, the Property Owner uses an online pre-qualification tool available through this  website that instantly estimates a maximum financing amount available through E|VEST Florida based on the property’s assessed value. The amount of E|VEST Florida financing potentially available for the property is displayed and a hard copy is automatically mailed to the Property Owner in the form of a Pre-qualification Letter.</p>
<p>If this potential financing amount is deemed sufficient by the prospective participant, the Property Owner will apply to participate in the E|VEST Florida program.  The application requires the Property Owner to provide information about the property and contact information.</p>
<p>Step 3. Bidding</p>
<p>The Property Owner either obtains from an Authorized Contractor or, for owner-installed Qualifying Improvements (DIY QIs), prepare a Detailed Bid(s).  The Detailed Bid(s) should identify all cost elements associated with installation of Qualifying Improvements, including labor, materials and equipment.  Only Qualifying Improvement elements and associated costs may be financed through E|VEST Florida.  For energy efficiency improvements, an estimate of energy savings resulting from installation of the proposed Qualifying Improvement(s) must be included.  In most cases, an estimate of savings from implementation over a code compliant structure will suffice.</p>
<p>The Detailed Bid(s) must also include a completed E|VEST Florida Bid Summary Form (INCLUDE Bid Summary Form).  The Bid Summary Form highlights certain information of primary importance to the Property Owner’s financing such as the specific Qualifying Improvements being made by manufacturer and model number, the names and licenses of all contractors performing the work, the estimated energy savings, and the total bid cost, including the optional Energy Rater service fee. Any manufacturer’s specifications detailing the estimated performance of Qualifying Improvements should also be attached to the Bid Summary Form.</p>
<p>Please note: modifications to the bid for which E|VEST Florida financing is requested (e.g., additional work required as a result of further inspection) may only be made prior to underwriting.  Once funding for a project is committed and an associated lien placed on the property, any additions to the initial scope of work could require a separate application or alternative funding for such additional work.</p>
<p>Step 4. Underwriting</p>
<p>The next step to obtaining financing is for the Property Owner to submit the following documentation for a formal underwriting process: the Bid Summary Form; Prequalification Letter or a screen printout; the Detailed Bid; and all analyses, supporting calculations and supporting documentation. The underwriting process is an in-depth review that includes verification of project documentation, contractor credentials (if applicable) and property information. Underwriting usually takes 5 days or less.</p>
<p>Step 5. Closing, Lien Placement and Notice to Proceed</p>
<p>Upon successful completion of the underwriting process, the Property Owner’s project funding is committed and a closing date will be scheduled.  Documents authorizing E|VEST Florida to include the special assessment on the corresponding property tax bill will be executed at closing.</p>
<p>E|VEST Florida provides protection to the Property Owner by holding final payment to the Authorized Contractor until the Property Owner is satisfied that the work is complete.  Before the lien is placed the Property Owner must agree that the completed and signed Building Permit constitutes a significant level of satisfaction, and that payment to the contractor for bid services rendered will not be unreasonably withheld.</p>
<p>Following Property Owner agreement to the terms and conditions and signature, the lien will be placed, and E|VEST Florida will issue a Notice to Proceed (NTP) for work to commence.</p>
<p>Although work may commence prior to issuance of the E|VEST Florida NTP, any such work would be conducted at the sole risk of the contractor.  Absent an E|VEST Florida NTP, the contractor may be unable to recover project costs in the event no closing occurs. </p>
<p>Step 6. Work Performance</p>
<p>After closing, E|VEST Florida will provide a copy of the contractor’s Bid Summary Form to the local government Building Department.  Contractors must obtain a Building Permit(s) for all phases and trades used on the Project and comply with associated documentary requirements.  Once all requisite permits are in place work can commence.  Contractors should maintain a record of all permits, periodic progress inspections/reports, and other documentation necessary to demonstrate activities conducted.  Upon work completion, all final inspections must be conducted and permits closed.</p>
<p>Step 7. Final Payment</p>
<p>E|VEST Florida financing is disbursed to the contractor in a lump sum upon successful demonstration of project completion. Once the project has been successfully completed, all permits closed, and occupancy notice(s) issued (if applicable), the Contractor submits a Project Package to the Property Owner for review, approval, and signature. Upon approval, the Property Owner submits the fully executed Project Package to E|VEST Florida (INCLUDE LINK).</p>
<p>E|VEST Florida will then verify all project documentation including:</p>
<ul>
<li>Completed Project Package Form;</li>
<li>Property Owner Approval Form;</li>
<li>Completed and Authorized Building Permit; and</li>
<li>Completed Bid Summary Form (with attachments):</li>
<li>Project Bid for Qualifying Improvements</li>
<li>Energy Rater or Utility – Estimated Energy Savings Report</li>
<li>Energy Efficiency/Renewable Equipment – Manufacturer Specifications</li>
</ul>
<p>E|VEST Florida will verify that the performing contractor’s license and all subcontractors’ licenses are valid and then issue payment to the performing contractor. Completed work may also be inspected and verified by SAIC as a condition of payment. The payment process generally takes no more than five (5) business days.</p>
</div>

<h3>Are E|VEST Florida financed projects eligible for progress payments to offset the upfront cost of materials and equipment used in the installation of Qualifying Improvements?</h3>
<div>
<p>At this time, the E|VEST Florida program does not provide for progress payments. The only payment currently allowed is the final payment as described above.  However, this could change in the future.</p>
</div>

<h3>Is any special documentation required to make sure Contractors are paid on time?</h3>
<div>
<p>In certain cases where the project goes over 20% of the assessed value, extra documentation supporting the Qualifying Improvement’s benefit-to-cost (B/C) ratio over 1.0 must be provided and a building simulation must be performed.  The simulation establishes the actual energy consumption of the building before to the installation of Qualifying Improvements and a projection of the energy savings resulting from the Qualifying Improvements. On the Bid Summary Form, Contractors should report energy savings as the difference between baseline and as designed models. In these cases, E|VEST Florida will verify the B/C ratio, any attendant simulations and supporting calculations as a condition of final payment. The cost of performing the simulation may be included in the cost of Qualifying Improvements.</p>
<p>For Contractors </p>
<ul>
<li>Contractor Application</li>
<li>Contractor Terms and Conditions</li>
<li>Code of Conduct </li>
</ul>
</div>


</div><!-- /END CONTRACTOR FAQS ACCORDION -->
 
					<div class="clear"></div>
			</div>
		</div>
		
	<?php endwhile; endif; ?>	
</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>