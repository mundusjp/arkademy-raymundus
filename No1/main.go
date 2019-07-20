package main

import (
	"encoding/json"
	"fmt"
	"os"
)

type person struct {
	Nama             string
	Age              string
	Address          string
	Hobbies          []string
	IsMarried        bool
	ListSchool       school
	Skills           []skill
	InterestInCoding bool
}

type skill struct {
	SkillName string
	Level     string
}

type school struct {
	Name    string
	YearIn  int
	YearOut int
	Major   string
}

func main() {
	sch := school{
		Name:    "IPB University",
		YearIn:  2015,
		YearOut: 2019,
		Major:   "Computer Science",
	}

	hb := []string{
		"Reading Books",
		"Watch Movies",
		"Cullinary",
		"Travelling",
		"Photography",
		"Design",
		"Coding",
	}

	skl1 := skill{
		SkillName: "Laravel",
		Level:     "Advanced",
	}
	skl2 := skill{
		SkillName: "Golang",
		Level:     "Beginner",
	}

	skl3 := skill{
		SkillName: "AngularJS",
		Level:     "Beginner",
	}

	skills := []skill{}
	skills = append(skills, skl1)
	skills = append(skills, skl2)
	skills = append(skills, skl3)

	ray := &person{
		Nama:             "Raymundus Jati Primanda",
		Age:              "22",
		Address:          "Jl. Porselen 5 No.7",
		Hobbies:          hb,
		IsMarried:        false,
		ListSchool:       sch,
		Skills:           skills,
		InterestInCoding: true,
	}
	b, err := json.Marshal(ray)
	if err != nil {
		fmt.Println(err)
		os.Exit(1)
	}
	fmt.Println(string(b))
}
