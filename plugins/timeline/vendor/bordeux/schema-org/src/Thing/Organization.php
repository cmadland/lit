<?php

namespace Bordeux\SchemaOrg\Thing;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/Organization
 *
 *
 * -------------------------------- Address ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress[] address
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress[] getAddress() Physical address of the item.
 *
 * @method Organization setAddress(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress $address ) setAddress(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress[] $address )Physical address of the item.
 *
 *
 * -------------------------------- AggregateRating ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Rating\AggregateRating|\Bordeux\SchemaOrg\Thing\Intangible\Rating\AggregateRating[] aggregateRating
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Rating\AggregateRating|\Bordeux\SchemaOrg\Thing\Intangible\Rating\AggregateRating[] getAggregateRating() The overall rating, based on a collection of reviews or ratings, of the item.
 *
 * @method Organization setAggregateRating(\Bordeux\SchemaOrg\Thing\Intangible\Rating\AggregateRating $aggregateRating ) setAggregateRating(\Bordeux\SchemaOrg\Thing\Intangible\Rating\AggregateRating[] $aggregateRating )The overall rating, based on a collection of reviews or ratings, of the item.
 *
 *
 * -------------------------------- Brand ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Organization[]|\Bordeux\SchemaOrg\Thing\Intangible\Brand|\Bordeux\SchemaOrg\Thing\Intangible\Brand[] brand
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Organization[]|\Bordeux\SchemaOrg\Thing\Intangible\Brand|\Bordeux\SchemaOrg\Thing\Intangible\Brand[] getBrand() The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
 *
 * @method Organization setBrand(\Bordeux\SchemaOrg\Thing\Organization $brand ) setBrand(\Bordeux\SchemaOrg\Thing\Organization[] $brand ) setBrand(\Bordeux\SchemaOrg\Thing\Intangible\Brand $brand ) setBrand(\Bordeux\SchemaOrg\Thing\Intangible\Brand[] $brand )The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
 *
 *
 * -------------------------------- ContactPoint ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint[] contactPoint
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint[] getContactPoint() A contact point for a person or organization.
 *
 * @method Organization setContactPoint(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint $contactPoint ) setContactPoint(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint[] $contactPoint )A contact point for a person or organization.
 *
 *
 * -------------------------------- ContactPoints ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint[] contactPoints
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint[] getContactPoints() A contact point for a person or organization (legacy spelling; see singular form, contactPoint).
 *
 * @method Organization setContactPoints(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint $contactPoints ) setContactPoints(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint[] $contactPoints )A contact point for a person or organization (legacy spelling; see singular form, contactPoint).
 *
 *
 * -------------------------------- Department ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Organization[] department
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Organization[] getDepartment() A relationship between an organization and a department of that organization, also described as an organization (allowing different urls, logos, opening hours). For example: a store with a pharmacy, or a bakery with a cafe.
 *
 * @method Organization setDepartment(\Bordeux\SchemaOrg\Thing\Organization $department ) setDepartment(\Bordeux\SchemaOrg\Thing\Organization[] $department )A relationship between an organization and a department of that organization, also described as an organization (allowing different urls, logos, opening hours). For example: a store with a pharmacy, or a bakery with a cafe.
 *
 *
 * -------------------------------- Duns ---------------------------------------------
 *
 * @property string|string[] duns
 *
 * @method string|string[] getDuns() The Dun & Bradstreet DUNS number for identifying an organization or business person.
 *
 * @method Organization setDuns(string $duns ) setDuns(string[] $duns )The Dun & Bradstreet DUNS number for identifying an organization or business person.
 *
 *
 * -------------------------------- Email ---------------------------------------------
 *
 * @property string|string[] email
 *
 * @method string|string[] getEmail() Email address.
 *
 * @method Organization setEmail(string $email ) setEmail(string[] $email )Email address.
 *
 *
 * -------------------------------- Employee ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Person|\Bordeux\SchemaOrg\Thing\Person[] employee
 *
 * @method \Bordeux\SchemaOrg\Thing\Person|\Bordeux\SchemaOrg\Thing\Person[] getEmployee() Someone working for this organization.
 *
 * @method Organization setEmployee(\Bordeux\SchemaOrg\Thing\Person $employee ) setEmployee(\Bordeux\SchemaOrg\Thing\Person[] $employee )Someone working for this organization.
 *
 *
 * -------------------------------- Employees ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Person|\Bordeux\SchemaOrg\Thing\Person[] employees
 *
 * @method \Bordeux\SchemaOrg\Thing\Person|\Bordeux\SchemaOrg\Thing\Person[] getEmployees() People working for this organization. (legacy spelling; see singular form, employee)
 *
 * @method Organization setEmployees(\Bordeux\SchemaOrg\Thing\Person $employees ) setEmployees(\Bordeux\SchemaOrg\Thing\Person[] $employees )People working for this organization. (legacy spelling; see singular form, employee)
 *
 *
 * -------------------------------- Event ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Event|\Bordeux\SchemaOrg\Thing\Event[] event
 *
 * @method \Bordeux\SchemaOrg\Thing\Event|\Bordeux\SchemaOrg\Thing\Event[] getEvent() Upcoming or past event associated with this place or organization.
 *
 * @method Organization setEvent(\Bordeux\SchemaOrg\Thing\Event $event ) setEvent(\Bordeux\SchemaOrg\Thing\Event[] $event )Upcoming or past event associated with this place or organization.
 *
 *
 * -------------------------------- Events ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Event|\Bordeux\SchemaOrg\Thing\Event[] events
 *
 * @method \Bordeux\SchemaOrg\Thing\Event|\Bordeux\SchemaOrg\Thing\Event[] getEvents() Upcoming or past events associated with this place or organization (legacy spelling; see singular form, event).
 *
 * @method Organization setEvents(\Bordeux\SchemaOrg\Thing\Event $events ) setEvents(\Bordeux\SchemaOrg\Thing\Event[] $events )Upcoming or past events associated with this place or organization (legacy spelling; see singular form, event).
 *
 *
 * -------------------------------- FaxNumber ---------------------------------------------
 *
 * @property string|string[] faxNumber
 *
 * @method string|string[] getFaxNumber() The fax number.
 *
 * @method Organization setFaxNumber(string $faxNumber ) setFaxNumber(string[] $faxNumber )The fax number.
 *
 *
 * -------------------------------- Founder ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Person|\Bordeux\SchemaOrg\Thing\Person[] founder
 *
 * @method \Bordeux\SchemaOrg\Thing\Person|\Bordeux\SchemaOrg\Thing\Person[] getFounder() A person who founded this organization.
 *
 * @method Organization setFounder(\Bordeux\SchemaOrg\Thing\Person $founder ) setFounder(\Bordeux\SchemaOrg\Thing\Person[] $founder )A person who founded this organization.
 *
 *
 * -------------------------------- Founders ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Person|\Bordeux\SchemaOrg\Thing\Person[] founders
 *
 * @method \Bordeux\SchemaOrg\Thing\Person|\Bordeux\SchemaOrg\Thing\Person[] getFounders() A person who founded this organization (legacy spelling; see singular form, founder).
 *
 * @method Organization setFounders(\Bordeux\SchemaOrg\Thing\Person $founders ) setFounders(\Bordeux\SchemaOrg\Thing\Person[] $founders )A person who founded this organization (legacy spelling; see singular form, founder).
 *
 *
 * -------------------------------- FoundingDate ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\SchemaDateTime|\Bordeux\SchemaOrg\SchemaDateTime[] foundingDate
 *
 * @method \Bordeux\SchemaOrg\SchemaDateTime|\Bordeux\SchemaOrg\SchemaDateTime[] getFoundingDate() The date that this organization was founded.
 *
 * @method Organization setFoundingDate(\Bordeux\SchemaOrg\SchemaDateTime $foundingDate ) setFoundingDate(\Bordeux\SchemaOrg\SchemaDateTime[] $foundingDate )The date that this organization was founded.
 *
 *
 * -------------------------------- GlobalLocationNumber ---------------------------------------------
 *
 * @property string|string[] globalLocationNumber
 *
 * @method string|string[] getGlobalLocationNumber() The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
 *
 * @method Organization setGlobalLocationNumber(string $globalLocationNumber ) setGlobalLocationNumber(string[] $globalLocationNumber )The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
 *
 *
 * -------------------------------- HasPOS ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Place|\Bordeux\SchemaOrg\Thing\Place[] hasPOS
 *
 * @method \Bordeux\SchemaOrg\Thing\Place|\Bordeux\SchemaOrg\Thing\Place[] getHasPOS() Points-of-Sales operated by the organization or person.
 *
 * @method Organization setHasPOS(\Bordeux\SchemaOrg\Thing\Place $hasPOS ) setHasPOS(\Bordeux\SchemaOrg\Thing\Place[] $hasPOS )Points-of-Sales operated by the organization or person.
 *
 *
 * -------------------------------- InteractionCount ---------------------------------------------
 *
 * @property string|string[] interactionCount
 *
 * @method string|string[] getInteractionCount() A count of a specific user interactions with this item—for example, 20 UserLikes, 5 UserComments, or 300 UserDownloads. The user interaction type should be one of the sub types of UserInteraction.
 *
 * @method Organization setInteractionCount(string $interactionCount ) setInteractionCount(string[] $interactionCount )A count of a specific user interactions with this item—for example, 20 UserLikes, 5 UserComments, or 300 UserDownloads. The user interaction type should be one of the sub types of UserInteraction.
 *
 *
 * -------------------------------- IsicV4 ---------------------------------------------
 *
 * @property string|string[] isicV4
 *
 * @method string|string[] getIsicV4() The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
 *
 * @method Organization setIsicV4(string $isicV4 ) setIsicV4(string[] $isicV4 )The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
 *
 *
 * -------------------------------- LegalName ---------------------------------------------
 *
 * @property string|string[] legalName
 *
 * @method string|string[] getLegalName() The official name of the organization, e.g. the registered company name.
 *
 * @method Organization setLegalName(string $legalName ) setLegalName(string[] $legalName )The official name of the organization, e.g. the registered company name.
 *
 *
 * -------------------------------- Location ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress[]|\Bordeux\SchemaOrg\Thing\Place|\Bordeux\SchemaOrg\Thing\Place[] location
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress[]|\Bordeux\SchemaOrg\Thing\Place|\Bordeux\SchemaOrg\Thing\Place[] getLocation() The location of the event, organization or action.
 *
 * @method Organization setLocation(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress $location ) setLocation(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress[] $location ) setLocation(\Bordeux\SchemaOrg\Thing\Place $location ) setLocation(\Bordeux\SchemaOrg\Thing\Place[] $location )The location of the event, organization or action.
 *
 *
 * -------------------------------- Logo ---------------------------------------------
 *
 * @property string|string[]|\Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject|\Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject[] logo
 *
 * @method string|string[]|\Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject|\Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject[] getLogo() A logo associated with an organization.
 *
 * @method Organization setLogo(string $logo ) setLogo(string[] $logo ) setLogo(\Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject $logo ) setLogo(\Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject[] $logo )A logo associated with an organization.
 *
 *
 * -------------------------------- MakesOffer ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Offer|\Bordeux\SchemaOrg\Thing\Intangible\Offer[] makesOffer
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Offer|\Bordeux\SchemaOrg\Thing\Intangible\Offer[] getMakesOffer() A pointer to products or services offered by the organization or person.
 *
 * @method Organization setMakesOffer(\Bordeux\SchemaOrg\Thing\Intangible\Offer $makesOffer ) setMakesOffer(\Bordeux\SchemaOrg\Thing\Intangible\Offer[] $makesOffer )A pointer to products or services offered by the organization or person.
 *
 *
 * -------------------------------- Member ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Organization[]|\Bordeux\SchemaOrg\Thing\Person|\Bordeux\SchemaOrg\Thing\Person[] member
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Organization[]|\Bordeux\SchemaOrg\Thing\Person|\Bordeux\SchemaOrg\Thing\Person[] getMember() A member of this organization.
 *
 * @method Organization setMember(\Bordeux\SchemaOrg\Thing\Organization $member ) setMember(\Bordeux\SchemaOrg\Thing\Organization[] $member ) setMember(\Bordeux\SchemaOrg\Thing\Person $member ) setMember(\Bordeux\SchemaOrg\Thing\Person[] $member )A member of this organization.
 *
 *
 * -------------------------------- Members ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Organization[]|\Bordeux\SchemaOrg\Thing\Person|\Bordeux\SchemaOrg\Thing\Person[] members
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Organization[]|\Bordeux\SchemaOrg\Thing\Person|\Bordeux\SchemaOrg\Thing\Person[] getMembers() A member of this organization (legacy spelling; see singular form, member).
 *
 * @method Organization setMembers(\Bordeux\SchemaOrg\Thing\Organization $members ) setMembers(\Bordeux\SchemaOrg\Thing\Organization[] $members ) setMembers(\Bordeux\SchemaOrg\Thing\Person $members ) setMembers(\Bordeux\SchemaOrg\Thing\Person[] $members )A member of this organization (legacy spelling; see singular form, member).
 *
 *
 * -------------------------------- Naics ---------------------------------------------
 *
 * @property string|string[] naics
 *
 * @method string|string[] getNaics() The North American Industry Classification System (NAICS) code for a particular organization or business person.
 *
 * @method Organization setNaics(string $naics ) setNaics(string[] $naics )The North American Industry Classification System (NAICS) code for a particular organization or business person.
 *
 *
 * -------------------------------- Owns ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\OwnershipInfo|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\OwnershipInfo[]|\Bordeux\SchemaOrg\Thing\Product|\Bordeux\SchemaOrg\Thing\Product[] owns
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\OwnershipInfo|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\OwnershipInfo[]|\Bordeux\SchemaOrg\Thing\Product|\Bordeux\SchemaOrg\Thing\Product[] getOwns() Products owned by the organization or person.
 *
 * @method Organization setOwns(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\OwnershipInfo $owns ) setOwns(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\OwnershipInfo[] $owns ) setOwns(\Bordeux\SchemaOrg\Thing\Product $owns ) setOwns(\Bordeux\SchemaOrg\Thing\Product[] $owns )Products owned by the organization or person.
 *
 *
 * -------------------------------- Review ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\CreativeWork\Review|\Bordeux\SchemaOrg\Thing\CreativeWork\Review[] review
 *
 * @method \Bordeux\SchemaOrg\Thing\CreativeWork\Review|\Bordeux\SchemaOrg\Thing\CreativeWork\Review[] getReview() A review of the item.
 *
 * @method Organization setReview(\Bordeux\SchemaOrg\Thing\CreativeWork\Review $review ) setReview(\Bordeux\SchemaOrg\Thing\CreativeWork\Review[] $review )A review of the item.
 *
 *
 * -------------------------------- Reviews ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\CreativeWork\Review|\Bordeux\SchemaOrg\Thing\CreativeWork\Review[] reviews
 *
 * @method \Bordeux\SchemaOrg\Thing\CreativeWork\Review|\Bordeux\SchemaOrg\Thing\CreativeWork\Review[] getReviews() Review of the item (legacy spelling; see singular form, review).
 *
 * @method Organization setReviews(\Bordeux\SchemaOrg\Thing\CreativeWork\Review $reviews ) setReviews(\Bordeux\SchemaOrg\Thing\CreativeWork\Review[] $reviews )Review of the item (legacy spelling; see singular form, review).
 *
 *
 * -------------------------------- Seeks ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Demand|\Bordeux\SchemaOrg\Thing\Intangible\Demand[] seeks
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Demand|\Bordeux\SchemaOrg\Thing\Intangible\Demand[] getSeeks() A pointer to products or services sought by the organization or person (demand).
 *
 * @method Organization setSeeks(\Bordeux\SchemaOrg\Thing\Intangible\Demand $seeks ) setSeeks(\Bordeux\SchemaOrg\Thing\Intangible\Demand[] $seeks )A pointer to products or services sought by the organization or person (demand).
 *
 *
 * -------------------------------- SubOrganization ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Organization[] subOrganization
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Organization[] getSubOrganization() A relationship between two organizations where the first includes the second, e.g., as a subsidiary. See also: the more specific 'department' property.
 *
 * @method Organization setSubOrganization(\Bordeux\SchemaOrg\Thing\Organization $subOrganization ) setSubOrganization(\Bordeux\SchemaOrg\Thing\Organization[] $subOrganization )A relationship between two organizations where the first includes the second, e.g., as a subsidiary. See also: the more specific 'department' property.
 *
 *
 * -------------------------------- TaxID ---------------------------------------------
 *
 * @property string|string[] taxID
 *
 * @method string|string[] getTaxID() The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
 *
 * @method Organization setTaxID(string $taxID ) setTaxID(string[] $taxID )The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
 *
 *
 * -------------------------------- Telephone ---------------------------------------------
 *
 * @property string|string[] telephone
 *
 * @method string|string[] getTelephone() The telephone number.
 *
 * @method Organization setTelephone(string $telephone ) setTelephone(string[] $telephone )The telephone number.
 *
 *
 * -------------------------------- VatID ---------------------------------------------
 *
 * @property string|string[] vatID
 *
 * @method string|string[] getVatID() The Value-added Tax ID of the organisation or person.
 *
 * @method Organization setVatID(string $vatID ) setVatID(string[] $vatID )The Value-added Tax ID of the organisation or person.
 *
 *
 */
 class Organization extends \Bordeux\SchemaOrg\Thing {

 }