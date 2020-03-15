<?php

namespace Bordeux\SchemaOrg\Thing\MedicalEntity;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/SuperficialAnatomy
 *
 *
 * -------------------------------- AssociatedPathophysiology ---------------------------------------------
 *
 * @property string|string[] associatedPathophysiology
 *
 * @method string|string[] getAssociatedPathophysiology() If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
 *
 * @method SuperficialAnatomy setAssociatedPathophysiology(string $associatedPathophysiology ) setAssociatedPathophysiology(string[] $associatedPathophysiology )If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
 *
 *
 * -------------------------------- RelatedAnatomy ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure[]|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem[] relatedAnatomy
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure[]|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem[] getRelatedAnatomy() Anatomical systems or structures that relate to the superficial anatomy.
 *
 * @method SuperficialAnatomy setRelatedAnatomy(\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure $relatedAnatomy ) setRelatedAnatomy(\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure[] $relatedAnatomy ) setRelatedAnatomy(\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem $relatedAnatomy ) setRelatedAnatomy(\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem[] $relatedAnatomy )Anatomical systems or structures that relate to the superficial anatomy.
 *
 *
 * -------------------------------- RelatedCondition ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalCondition|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalCondition[] relatedCondition
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalCondition|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalCondition[] getRelatedCondition() A medical condition associated with this anatomy.
 *
 * @method SuperficialAnatomy setRelatedCondition(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalCondition $relatedCondition ) setRelatedCondition(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalCondition[] $relatedCondition )A medical condition associated with this anatomy.
 *
 *
 * -------------------------------- RelatedTherapy ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalTherapy|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalTherapy[] relatedTherapy
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalTherapy|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalTherapy[] getRelatedTherapy() A medical therapy related to this anatomy.
 *
 * @method SuperficialAnatomy setRelatedTherapy(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalTherapy $relatedTherapy ) setRelatedTherapy(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalTherapy[] $relatedTherapy )A medical therapy related to this anatomy.
 *
 *
 * -------------------------------- Significance ---------------------------------------------
 *
 * @property string|string[] significance
 *
 * @method string|string[] getSignificance() The significance associated with the superficial anatomy; as an example, how characteristics of the superficial anatomy can suggest underlying medical conditions or courses of treatment.
 *
 * @method SuperficialAnatomy setSignificance(string $significance ) setSignificance(string[] $significance )The significance associated with the superficial anatomy; as an example, how characteristics of the superficial anatomy can suggest underlying medical conditions or courses of treatment.
 *
 *
 */
 class SuperficialAnatomy extends \Bordeux\SchemaOrg\Thing\MedicalEntity {

 }