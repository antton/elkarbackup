<?php

namespace Proxies\__CG__\Binovo\ElkarBackupBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Policy extends \Binovo\ElkarBackupBundle\Entity\Policy implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Binovo\\ElkarBackupBundle\\Entity\\Policy' . "\0" . 'allRetains', 'id', 'description', 'name', 'hourlyHours', 'hourlyDaysOfMonth', 'hourlyDaysOfWeek', 'hourlyMonths', 'hourlyCount', 'dailyHours', 'dailyDaysOfMonth', 'dailyDaysOfWeek', 'dailyMonths', 'dailyCount', 'weeklyHours', 'weeklyDaysOfMonth', 'weeklyDaysOfWeek', 'weeklyMonths', 'weeklyCount', 'monthlyHours', 'monthlyDaysOfMonth', 'monthlyDaysOfWeek', 'monthlyMonths', 'monthlyCount', 'yearlyHours', 'yearlyDaysOfMonth', 'yearlyDaysOfWeek', 'yearlyMonths', 'yearlyCount', 'include', 'exclude', 'syncFirst'];
        }

        return ['__isInitialized__', '' . "\0" . 'Binovo\\ElkarBackupBundle\\Entity\\Policy' . "\0" . 'allRetains', 'id', 'description', 'name', 'hourlyHours', 'hourlyDaysOfMonth', 'hourlyDaysOfWeek', 'hourlyMonths', 'hourlyCount', 'dailyHours', 'dailyDaysOfMonth', 'dailyDaysOfWeek', 'dailyMonths', 'dailyCount', 'weeklyHours', 'weeklyDaysOfMonth', 'weeklyDaysOfWeek', 'weeklyMonths', 'weeklyCount', 'monthlyHours', 'monthlyDaysOfMonth', 'monthlyDaysOfWeek', 'monthlyMonths', 'monthlyCount', 'yearlyHours', 'yearlyDaysOfMonth', 'yearlyDaysOfWeek', 'yearlyMonths', 'yearlyCount', 'include', 'exclude', 'syncFirst'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Policy $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getRunnableRetains(\DateTime $time)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRunnableRetains', [$time]);

        return parent::getRunnableRetains($time);
    }

    /**
     * {@inheritDoc}
     */
    public function getRetains()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRetains', []);

        return parent::getRetains();
    }

    /**
     * {@inheritDoc}
     */
    public function isRotation($retain)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isRotation', [$retain]);

        return parent::isRotation($retain);
    }

    /**
     * {@inheritDoc}
     */
    public function isHourlyHoursValid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isHourlyHoursValid', []);

        return parent::isHourlyHoursValid();
    }

    /**
     * {@inheritDoc}
     */
    public function mustSync($retain)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'mustSync', [$retain]);

        return parent::mustSync($retain);
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setHourlyHours($hourlyHours)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHourlyHours', [$hourlyHours]);

        return parent::setHourlyHours($hourlyHours);
    }

    /**
     * {@inheritDoc}
     */
    public function getHourlyHours()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHourlyHours', []);

        return parent::getHourlyHours();
    }

    /**
     * {@inheritDoc}
     */
    public function setHourlyDaysOfMonth($hourlyDaysOfMonth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHourlyDaysOfMonth', [$hourlyDaysOfMonth]);

        return parent::setHourlyDaysOfMonth($hourlyDaysOfMonth);
    }

    /**
     * {@inheritDoc}
     */
    public function getHourlyDaysOfMonth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHourlyDaysOfMonth', []);

        return parent::getHourlyDaysOfMonth();
    }

    /**
     * {@inheritDoc}
     */
    public function setHourlyDaysOfWeek($hourlyDaysOfWeek)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHourlyDaysOfWeek', [$hourlyDaysOfWeek]);

        return parent::setHourlyDaysOfWeek($hourlyDaysOfWeek);
    }

    /**
     * {@inheritDoc}
     */
    public function getHourlyDaysOfWeek()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHourlyDaysOfWeek', []);

        return parent::getHourlyDaysOfWeek();
    }

    /**
     * {@inheritDoc}
     */
    public function setHourlyMonths($hourlyMonths)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHourlyMonths', [$hourlyMonths]);

        return parent::setHourlyMonths($hourlyMonths);
    }

    /**
     * {@inheritDoc}
     */
    public function getHourlyMonths()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHourlyMonths', []);

        return parent::getHourlyMonths();
    }

    /**
     * {@inheritDoc}
     */
    public function setHourlyCount($hourlyCount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHourlyCount', [$hourlyCount]);

        return parent::setHourlyCount($hourlyCount);
    }

    /**
     * {@inheritDoc}
     */
    public function getHourlyCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHourlyCount', []);

        return parent::getHourlyCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setDailyHours($dailyHours)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDailyHours', [$dailyHours]);

        return parent::setDailyHours($dailyHours);
    }

    /**
     * {@inheritDoc}
     */
    public function getDailyHours()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDailyHours', []);

        return parent::getDailyHours();
    }

    /**
     * {@inheritDoc}
     */
    public function setDailyDaysOfMonth($dailyDaysOfMonth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDailyDaysOfMonth', [$dailyDaysOfMonth]);

        return parent::setDailyDaysOfMonth($dailyDaysOfMonth);
    }

    /**
     * {@inheritDoc}
     */
    public function getDailyDaysOfMonth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDailyDaysOfMonth', []);

        return parent::getDailyDaysOfMonth();
    }

    /**
     * {@inheritDoc}
     */
    public function setDailyDaysOfWeek($dailyDaysOfWeek)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDailyDaysOfWeek', [$dailyDaysOfWeek]);

        return parent::setDailyDaysOfWeek($dailyDaysOfWeek);
    }

    /**
     * {@inheritDoc}
     */
    public function getDailyDaysOfWeek()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDailyDaysOfWeek', []);

        return parent::getDailyDaysOfWeek();
    }

    /**
     * {@inheritDoc}
     */
    public function setDailyMonths($dailyMonths)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDailyMonths', [$dailyMonths]);

        return parent::setDailyMonths($dailyMonths);
    }

    /**
     * {@inheritDoc}
     */
    public function getDailyMonths()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDailyMonths', []);

        return parent::getDailyMonths();
    }

    /**
     * {@inheritDoc}
     */
    public function setDailyCount($dailyCount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDailyCount', [$dailyCount]);

        return parent::setDailyCount($dailyCount);
    }

    /**
     * {@inheritDoc}
     */
    public function getDailyCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDailyCount', []);

        return parent::getDailyCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setWeeklyHours($weeklyHours)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWeeklyHours', [$weeklyHours]);

        return parent::setWeeklyHours($weeklyHours);
    }

    /**
     * {@inheritDoc}
     */
    public function getWeeklyHours()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWeeklyHours', []);

        return parent::getWeeklyHours();
    }

    /**
     * {@inheritDoc}
     */
    public function setWeeklyDaysOfMonth($weeklyDaysOfMonth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWeeklyDaysOfMonth', [$weeklyDaysOfMonth]);

        return parent::setWeeklyDaysOfMonth($weeklyDaysOfMonth);
    }

    /**
     * {@inheritDoc}
     */
    public function getWeeklyDaysOfMonth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWeeklyDaysOfMonth', []);

        return parent::getWeeklyDaysOfMonth();
    }

    /**
     * {@inheritDoc}
     */
    public function setWeeklyDaysOfWeek($weeklyDaysOfWeek)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWeeklyDaysOfWeek', [$weeklyDaysOfWeek]);

        return parent::setWeeklyDaysOfWeek($weeklyDaysOfWeek);
    }

    /**
     * {@inheritDoc}
     */
    public function getWeeklyDaysOfWeek()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWeeklyDaysOfWeek', []);

        return parent::getWeeklyDaysOfWeek();
    }

    /**
     * {@inheritDoc}
     */
    public function setWeeklyMonths($weeklyMonths)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWeeklyMonths', [$weeklyMonths]);

        return parent::setWeeklyMonths($weeklyMonths);
    }

    /**
     * {@inheritDoc}
     */
    public function getWeeklyMonths()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWeeklyMonths', []);

        return parent::getWeeklyMonths();
    }

    /**
     * {@inheritDoc}
     */
    public function setWeeklyCount($weeklyCount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWeeklyCount', [$weeklyCount]);

        return parent::setWeeklyCount($weeklyCount);
    }

    /**
     * {@inheritDoc}
     */
    public function getWeeklyCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWeeklyCount', []);

        return parent::getWeeklyCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setMonthlyHours($monthlyHours)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMonthlyHours', [$monthlyHours]);

        return parent::setMonthlyHours($monthlyHours);
    }

    /**
     * {@inheritDoc}
     */
    public function getMonthlyHours()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMonthlyHours', []);

        return parent::getMonthlyHours();
    }

    /**
     * {@inheritDoc}
     */
    public function setMonthlyDaysOfMonth($monthlyDaysOfMonth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMonthlyDaysOfMonth', [$monthlyDaysOfMonth]);

        return parent::setMonthlyDaysOfMonth($monthlyDaysOfMonth);
    }

    /**
     * {@inheritDoc}
     */
    public function getMonthlyDaysOfMonth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMonthlyDaysOfMonth', []);

        return parent::getMonthlyDaysOfMonth();
    }

    /**
     * {@inheritDoc}
     */
    public function setMonthlyDaysOfWeek($monthlyDaysOfWeek)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMonthlyDaysOfWeek', [$monthlyDaysOfWeek]);

        return parent::setMonthlyDaysOfWeek($monthlyDaysOfWeek);
    }

    /**
     * {@inheritDoc}
     */
    public function getMonthlyDaysOfWeek()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMonthlyDaysOfWeek', []);

        return parent::getMonthlyDaysOfWeek();
    }

    /**
     * {@inheritDoc}
     */
    public function setMonthlyMonths($monthlyMonths)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMonthlyMonths', [$monthlyMonths]);

        return parent::setMonthlyMonths($monthlyMonths);
    }

    /**
     * {@inheritDoc}
     */
    public function getMonthlyMonths()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMonthlyMonths', []);

        return parent::getMonthlyMonths();
    }

    /**
     * {@inheritDoc}
     */
    public function setMonthlyCount($monthlyCount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMonthlyCount', [$monthlyCount]);

        return parent::setMonthlyCount($monthlyCount);
    }

    /**
     * {@inheritDoc}
     */
    public function getMonthlyCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMonthlyCount', []);

        return parent::getMonthlyCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setYearlyHours($yearlyHours)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setYearlyHours', [$yearlyHours]);

        return parent::setYearlyHours($yearlyHours);
    }

    /**
     * {@inheritDoc}
     */
    public function getYearlyHours()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getYearlyHours', []);

        return parent::getYearlyHours();
    }

    /**
     * {@inheritDoc}
     */
    public function setYearlyDaysOfMonth($yearlyDaysOfMonth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setYearlyDaysOfMonth', [$yearlyDaysOfMonth]);

        return parent::setYearlyDaysOfMonth($yearlyDaysOfMonth);
    }

    /**
     * {@inheritDoc}
     */
    public function getYearlyDaysOfMonth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getYearlyDaysOfMonth', []);

        return parent::getYearlyDaysOfMonth();
    }

    /**
     * {@inheritDoc}
     */
    public function setYearlyDaysOfWeek($yearlyDaysOfWeek)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setYearlyDaysOfWeek', [$yearlyDaysOfWeek]);

        return parent::setYearlyDaysOfWeek($yearlyDaysOfWeek);
    }

    /**
     * {@inheritDoc}
     */
    public function getYearlyDaysOfWeek()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getYearlyDaysOfWeek', []);

        return parent::getYearlyDaysOfWeek();
    }

    /**
     * {@inheritDoc}
     */
    public function setYearlyMonths($yearlyMonths)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setYearlyMonths', [$yearlyMonths]);

        return parent::setYearlyMonths($yearlyMonths);
    }

    /**
     * {@inheritDoc}
     */
    public function getYearlyMonths()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getYearlyMonths', []);

        return parent::getYearlyMonths();
    }

    /**
     * {@inheritDoc}
     */
    public function setYearlyCount($yearlyCount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setYearlyCount', [$yearlyCount]);

        return parent::setYearlyCount($yearlyCount);
    }

    /**
     * {@inheritDoc}
     */
    public function getYearlyCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getYearlyCount', []);

        return parent::getYearlyCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setInclude($include)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInclude', [$include]);

        return parent::setInclude($include);
    }

    /**
     * {@inheritDoc}
     */
    public function getInclude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInclude', []);

        return parent::getInclude();
    }

    /**
     * {@inheritDoc}
     */
    public function setExclude($exclude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExclude', [$exclude]);

        return parent::setExclude($exclude);
    }

    /**
     * {@inheritDoc}
     */
    public function getExclude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExclude', []);

        return parent::getExclude();
    }

    /**
     * {@inheritDoc}
     */
    public function setSyncFirst($syncFirst)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSyncFirst', [$syncFirst]);

        return parent::setSyncFirst($syncFirst);
    }

    /**
     * {@inheritDoc}
     */
    public function getSyncFirst()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSyncFirst', []);

        return parent::getSyncFirst();
    }

}
