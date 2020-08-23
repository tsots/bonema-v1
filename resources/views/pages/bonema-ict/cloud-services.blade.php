@extends('layouts.app')

@section('page-class', 'bonema-ict')
@section('page-name', 'cloud-services')


@section('content')
<h1>{{$title}}</h1>
<div class="content">
  {{-- <h1 class="page-name">CLOUD SERVICES</h1> --}}

  <section>
    <h2 class="sub-heading">Securing and validating your backups</h2>
    <p>
      Your data is probably the most important asset for your business.
      However, securing it from loss or a major disaster can be a
      nightmare. Typical backups are taken to tape, or simply a USB
      disk, but there is no validation whether those backups can provide
      a reliable recovery. Changing backup tapes is often a boring
      routine task that can be neglected and therefore puts at jeopardy
      your data’s security. And taking tapes offsite, for peace of mind
      in case of a disaster, is in reality introducing new security
      risks!
    </p>
  </section>
  <section>
    <h2 class="sub-heading">A subscription-based managed service</h2>
    <div class="infor__image">
      <img class="seagate" src="{{asset('images/bonema-ict__seagate_logo.jpg')}}" alt="" />
    </div>
    <p>
      The Managed Cloud Backup and Recovery service, offered by Bonema
      Technologies, delivers cloud-connected backup and recovery in the
      form of a cloud service, using state-of-the-art backup software
      from EVault, now part of Seagate, world leaders in storage
      technology.
    </p>
  </section>
  <section>
    <h2 class="sub-heading">Preparing for Disaster Recovery</h2>
    <p>
      These deployments are built on a single technology platform, which
      makes it easy to mix and match to meet your business needs. Bonema
      Technologies recommends the cloud service as it provides you with
      immediate offsite disaster protection, preparing you for Disaster
      Recovery. It’s the best way to make sure your critical data,
      applications, and systems are safe and available.
    </p>
  </section>
  <section>
    <h2 class="sub-heading">Advantages of using our solution</h2>
    <ul>
      <li>Off-site data backup</li>
      <li>In secure data centres</li>
      <li>256-bit AES encryption</li>
      <li>
        Fully managed, subscription-based Backup as a service (Baas),
        including monitoring
      </li>
      <li>No capital costs for hardware or software</li>
      <li>Granular recovery capabilities</li>
      <li>
        Ability to restore files from your server from upto 12 months
        ago
      </li>
      <li>
        Supports various operating systems, applications and platforms
      </li>
      <li>
        No more worries about administering and test-restoring from your
        tape-backups
      </li>
      <li>
        Our Managed Cloud Backup complements replication solutions for a
        complete Disaster Recovery plan
      </li>
    </ul>
  </section>
  <section>
    <h2 class="sub-heading">256-bit AES encryption</h2>
    <div class="infor__image">
      <img class="deltapro" src="{{asset('images/bonema-ict__managed_backup_encryption.jpg')}}" alt="" />
    </div>
    <p>
      Your data will be encrypted using the National Institute of
      Standards and Technology (NIST) 256-bit Advanced Encryption
      Standard (AES) prior to leaving the source server, over the wire
      and also at rest.
    </p>
  </section>
</div>

@endsection