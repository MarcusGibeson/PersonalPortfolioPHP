<?php

class Project implements JsonSerializable{
    private $id;
    private $title;
    private $description;
    private $imgLink;
    private $gifLink;
    private $projectUrl;
    private $repoUrl;
    private $technologiesUsed = [];
    private $startDate;
    private $endDate;
    private $status;
    private $contributors = [];
    private $tags = [];


    public function __construct($id, $title, $description, $imgLink, $gifLink, $projectUrl, $repoUrl, $technologiesUsed, $startDate, $endDate, $status, $contributors, $tags) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->imgLink = $imgLink;
        $this->gifLink = $gifLink;
        $this->projectUrl = $projectUrl;
        $this->repoUrl = $repoUrl;
        $this->technologiesUsed = $technologiesUsed;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->status = $status;
        $this->contributors = $contributors;
        $this->tags = $tags;

    }

    public function getId() {
        return $this->id;
    }
    public function getTitle() {
        return $this->title;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getImgLink() {
        return $this->imgLink;
    }
    public function getGifLink() {
        return $this->gifLink;
    }
    public function getProjectUrl() {
        return $this->projectUrl;
    }
    public function getRepoUrl() {
        return $this->repoUrl;
    }
    public function getTechnologiesUsed() {
        return $this->technologiesUsed;
    }
    public function getStartDate() {
        return $this->startDate;
    }
    public function getEndDate() {
        return $this->endDate;
    }
    public function getStatus() {
        return $this->status;
    }
    public function getContributors() {
        return $this->contributors;
    }
    public function getTags() {
        return $this->tags;
    }

    public function jsonSerialize() {
        return [
            'title'=> $this->title,
            'description'=> $this->description,
            'imgLink' => $this->imgLink,
            'gifLink' => $this->gifLink,
            'projectUrl' => $this->projectUrl,
            'repoUrl' => $this->repoUrl,
            'technologiesUsed' => $this->technologiesUsed,
            'startDate' => $this->startDate,
            'endDate' => $this->endDate,
            'status' => $this->status,
            'contributors' => $this->contributors,
            'tags' => $this->tags
        ];
    }
}

class Skill {
    private $language;
    private $percentage;
    private $rating;

    public function __construct ($language, $percentage, $rating) {
        $this->language = $language;
        $this->percentage = $percentage;
        $this->rating = $rating;
    }

    public function getLanguage() {
        return $this->language;
    }
    public function getPercentage() {
        return $this->percentage;
    }
    public function getRating() {
        return $this->rating;
    }
}