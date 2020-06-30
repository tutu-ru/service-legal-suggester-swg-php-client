package openapi

import (
	"stash.tutu.ru/golang/envs"
	"stash.tutu.ru/golang/log"
	"time"
)

type Specs struct {
	Host           string        `envconfig:"LEGALSUGGESTER_HOST" required:"true" example:"legal.internal.tutu.current.rus.tutu.pro"`
	Scheme         string        `envconfig:"LEGALSUGGESTER_HOST_SCHEME" required:"false"`
	ReadTimeout    time.Duration `envconfig:"LEGALSUGGESTER_READ_TIMEOUT" required:"true" default:"1s"`
	ConnectTimeout time.Duration `envconfig:"LEGALSUGGESTER_CONNECT_TIMEOUT" required:"true" default:"1s"`
}

var specs Specs

func init() {
	err := envs.ParseAndRegister("LegalSuggester", specs, &specs)
	if err != nil {
		log.For("LegalSuggesterClient").Error().Err(err).Msg("missing envs")
	}
}
