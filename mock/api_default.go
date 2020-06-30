// Code generated by MockGen. DO NOT EDIT.
// Source: ./api_default.go

// Package mock_openapi is a generated GoMock package.
package mock_openapi

import (
	context "context"
	gomock "github.com/golang/mock/gomock"
	http "net/http"
	reflect "reflect"
	openapi "stash.tutu.ru/tutuswg/go_legalsuggesterclient"
)

// MockDefaultApiInterface is a mock of DefaultApiInterface interface
type MockDefaultApiInterface struct {
	ctrl     *gomock.Controller
	recorder *MockDefaultApiInterfaceMockRecorder
}

// MockDefaultApiInterfaceMockRecorder is the mock recorder for MockDefaultApiInterface
type MockDefaultApiInterfaceMockRecorder struct {
	mock *MockDefaultApiInterface
}

// NewMockDefaultApiInterface creates a new mock instance
func NewMockDefaultApiInterface(ctrl *gomock.Controller) *MockDefaultApiInterface {
	mock := &MockDefaultApiInterface{ctrl: ctrl}
	mock.recorder = &MockDefaultApiInterfaceMockRecorder{mock}
	return mock
}

// EXPECT returns an object that allows the caller to indicate expected use
func (m *MockDefaultApiInterface) EXPECT() *MockDefaultApiInterfaceMockRecorder {
	return m.recorder
}

// LegalSuggesterServiceSuggestionsSearchGet mocks base method
func (m *MockDefaultApiInterface) LegalSuggesterServiceSuggestionsSearchGet(ctx context.Context, query, count string) ([]openapi.Suggestion, *http.Response, error) {
	m.ctrl.T.Helper()
	ret := m.ctrl.Call(m, "LegalSuggesterServiceSuggestionsSearchGet", ctx, query, count)
	ret0, _ := ret[0].([]openapi.Suggestion)
	ret1, _ := ret[1].(*http.Response)
	ret2, _ := ret[2].(error)
	return ret0, ret1, ret2
}

// LegalSuggesterServiceSuggestionsSearchGet indicates an expected call of LegalSuggesterServiceSuggestionsSearchGet
func (mr *MockDefaultApiInterfaceMockRecorder) LegalSuggesterServiceSuggestionsSearchGet(ctx, query, count interface{}) *gomock.Call {
	mr.mock.ctrl.T.Helper()
	return mr.mock.ctrl.RecordCallWithMethodType(mr.mock, "LegalSuggesterServiceSuggestionsSearchGet", reflect.TypeOf((*MockDefaultApiInterface)(nil).LegalSuggesterServiceSuggestionsSearchGet), ctx, query, count)
}