---
title: 'Chapter 2'
taxonomy:
    category:
        - docs
---

### Basic Statistical Concepts for Measurement

#### Context

- Researcher wants to understand the relationship between intelligence and executive functioning (planning and organizing)
- she can't gather data from the entire population, so needs a random sample, then draw inferences from the data

> This notion of using samples to represent populations lies at the heart of much of statistical analysis and will be a core idea that we will rely upon throughout this book. Of key importance in the whole sampling enterprise is the need to make the sample representative of the population, which is most easily accomplished through random selection of individuals from the population of interest. (p. 12)

- random sampling does not guarantee representative sample, but it does mitigate against selection bias

#### Central Tendency 

- Mean - sum of scores divided by N
- Median - middle score of ranked sample, or mean of middle two scores
- Mode - most common score

#### Variability

- extent to which individuals cluster or not around the central value
- larger values indicate greater dispersion

##### variance [sigma squared]

- `eq. 2.2`

##### Standard deviation [sigma]

- `eq. 2.3`

##### Z-scores

- Compare across individuals (IQ scores for 2 people) and within individuals across assessments (compare relative IQ and executive functioning for a single individual)
- second case is complex b/c the assessments may not have the same scale
  - IQ - mean of 106 and SD of 10.2
  - executive functioning - mean 52 and SD of 8.4
  - different scales means you can't compare the two, so need to transform into common scale
- z-score is a measure of how far above or below the mean, measured in SD - `eq. 2.4`

##### Normal distribution

- functional representations of variable, reflecting liklihood of obtaining a specific value within a range of possible values
- Bell curve
  - perfectly symmetric
  - characterized in terms of mean and SD
  - standard normal = mean of 0 and SD of 1
  - Mean, median, and mode are all the same value

##### Correlation and covariance

- covariance
  - how variables change together
  - `eq. 2.5`
  - positive values in the numerator indicate that individuals with larger values of X also have larger values of Y
  - -ve values indicate larger values of X = smaller values of Y
  - larger covariance values indicate the relationship is stronger
  - one problem is that the scale is not scale free...value is directly tied to the scales of the two variables, making interpretaion difficult
  - solution is to standardize the score using Pearson's *r* (correlation coefficient) `eq. 2.6`
  - Value of 0 means no relationship; 1 or -1 mean perfect relationship
  - large values are relative to the research context
    - 0.6 might be large in psychological testing (large variability) but small in materials science (small variability)

##### Variance and covariance of linear sums

- tests are collections of several instruments in the form of individual items of subscales on a battery `eq. 2.7`
  - variance of a composite can be weighted `eq. 2.8`
- covariance of 2 linear composites is sum of covariances among variables `eq. 2.9`
  - covariance can also be weighted `eq. 2.10`

##### Linear Regression

- dependent variable - *y*
- independent variable - *x*
- *x* is predictor of *y*
- `prediction is not causality`, rather, if we know *x*, we can predict *y*, but *x* does not cause *y*
  - e.g. if a student is given a formative reading assessment *x*, followed some time later by a summative reading assessment *y*, we could predict *y* based on *x*, but we could not say that *x* caused *y*. The two scores are caused by a number of factors (reading ability, stress, anxiety, tiredness) and the two scores are related to one another. We use regression to measure the strength and nature or direction of that relationship.

> focus is on estimating relationships between independent and dependent variables in the form of the slope

##### Analysis of Variance (ANOVA)

> focus is on comparing group means on the dependent variable across groups

- used to compare means on a dependent variable among 2 or more groups for a categorical independent variable

! Linear regression and ANOVA are methamatically identical...the difference is in `focus`, not `method`



​	