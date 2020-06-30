/*
 * Service suggestions api
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * API version: 1.0.0
 * Generated by: OpenAPI Generator (https://openapi-generator.tech)
 */

package openapi

// Suggestion struct for Suggestion
type Suggestion struct {
	// ИНН
	Inn string `json:"inn,omitempty"`
	// КПП
	Kpp string `json:"kpp,omitempty"`
	// ОКПО
	Okpo string `json:"okpo,omitempty"`
	// ОГРН
	Ogrn string `json:"ogrn,omitempty"`
	// Наименование компании одной строкой (полное) unrestrictedValue
	Name string `json:"name,omitempty"`
	// Адрес организации одной строкой
	LegalAddress string `json:"legalAddress,omitempty"`
	// Дата регистрации в формате Y-m-d
	RegistrationDate string `json:"registrationDate,omitempty"`
	// Должность руководителя
	DirectorFullName string   `json:"directorFullName,omitempty"`
	ContactPhones    []string `json:"contactPhones,omitempty"`
	// Полное наименование с ОПФ
	FullWithOpf string `json:"fullWithOpf,omitempty"`
	// Краткое наименование с ОПФ
	ShortWithOpf string `json:"shortWithOpf,omitempty"`
}