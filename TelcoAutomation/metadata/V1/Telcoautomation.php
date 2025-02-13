<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/telcoautomation/v1/telcoautomation.proto

namespace GPBMetadata\Google\Cloud\Telcoautomation\V1;

class Telcoautomation
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
5google/cloud/telcoautomation/v1/telcoautomation.protogoogle.cloud.telcoautomation.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
OrchestrationCluster
name (	L
management_config (21.google.cloud.telcoautomation.v1.ManagementConfig5
create_time (2.google.protobuf.TimestampB�A5
update_time (2.google.protobuf.TimestampB�AQ
labels (2A.google.cloud.telcoautomation.v1.OrchestrationCluster.LabelsEntry
tna_version (	B�AP
state (2;.google.cloud.telcoautomation.v1.OrchestrationCluster.StateB�A-
LabelsEntry
key (	
value (	:8"R
State
STATE_UNSPECIFIED 
CREATING

ACTIVE
DELETING

FAILED:��A�
3telcoautomation.googleapis.com/OrchestrationClusterUprojects/{project}/locations/{location}/orchestrationClusters/{orchestration_cluster}"�
EdgeSlm
name (	[
orchestration_cluster (	B<�A�A5
3telcoautomation.googleapis.com/OrchestrationCluster5
create_time (2.google.protobuf.TimestampB�A5
update_time (2.google.protobuf.TimestampB�AJ
labels (24.google.cloud.telcoautomation.v1.EdgeSlm.LabelsEntryB�A
tna_version (	B�AC
state (2..google.cloud.telcoautomation.v1.EdgeSlm.StateB�Aa
workload_cluster_type (2<.google.cloud.telcoautomation.v1.EdgeSlm.WorkloadClusterTypeB�A-
LabelsEntry
key (	
value (	:8"R
State
STATE_UNSPECIFIED 
CREATING

ACTIVE
DELETING

FAILED"O
WorkloadClusterType%
!WORKLOAD_CLUSTER_TYPE_UNSPECIFIED 
GDCE
GKE:{�Ax
&telcoautomation.googleapis.com/EdgeSlm;projects/{project}/locations/{location}/edgeSlms/{edge_slm}*edgeSlms2edgeSlm"�
	Blueprint
name (	
revision_id (	B�A
source_blueprint (	B�A>
revision_create_time (2.google.protobuf.TimestampB�AV
approval_state (28.google.cloud.telcoautomation.v1.Blueprint.ApprovalStateB�A
display_name (	B�A

repository (	B�A:
files	 (2%.google.cloud.telcoautomation.v1.FileB�AL
labels
 (26.google.cloud.telcoautomation.v1.Blueprint.LabelsEntryB�A5
create_time (2.google.protobuf.TimestampB�A5
update_time (2.google.protobuf.TimestampB�A
source_provider (	B�AP
deployment_level (20.google.cloud.telcoautomation.v1.DeploymentLevelB�A
rollback_support (B�A-
LabelsEntry
key (	
value (	:8"V
ApprovalState
APPROVAL_STATE_UNSPECIFIED 	
DRAFT
PROPOSED
APPROVED:��A�
(telcoautomation.googleapis.com/Blueprintlprojects/{project}/locations/{location}/orchestrationClusters/{orchestration_cluster}/blueprints/{blueprint}*
blueprints2	blueprint"�
PublicBlueprint
name (	
display_name (	
description (	J
deployment_level (20.google.cloud.telcoautomation.v1.DeploymentLevel
source_provider (	
rollback_support (B�A:��A�
.telcoautomation.googleapis.com/PublicBlueprintJprojects/{project}/locations/{location}/publicBlueprints/{public_lueprint}*publicBlueprints2publicBlueprint"�

Deployment
name (	
revision_id (	B�A\'
source_blueprint_revision (	B�A>
revision_create_time (2.google.protobuf.TimestampB�AF
state (21.google.cloud.telcoautomation.v1.Deployment.StateB�A
display_name (	B�A

repository (	B�A:
files (2%.google.cloud.telcoautomation.v1.FileB�AM
labels	 (27.google.cloud.telcoautomation.v1.Deployment.LabelsEntryB�A5
create_time
 (2.google.protobuf.TimestampB�A5
update_time (2.google.protobuf.TimestampB�A
source_provider (	B�A
workload_cluster (	B�AP
deployment_level (20.google.cloud.telcoautomation.v1.DeploymentLevelB�A
rollback_support (B�A-
LabelsEntry
key (	
value (	:8"D
State
STATE_UNSPECIFIED 	
DRAFT
APPLIED
DELETING:��A�
)telcoautomation.googleapis.com/Deploymentnprojects/{project}/locations/{location}/orchestrationClusters/{orchestration_cluster}/deployments/{deployment}*deployments2
deployment"�
HydratedDeployment
name (	B�AN
state (29.google.cloud.telcoautomation.v1.HydratedDeployment.StateB�A:
files (2%.google.cloud.telcoautomation.v1.FileB�A
workload_cluster (	B�A"6
State
STATE_UNSPECIFIED 	
DRAFT
APPLIED:��A�
1telcoautomation.googleapis.com/HydratedDeployment�projects/{project}/locations/{location}/orchestrationClusters/{orchestration_cluster}/deployments/{deployment}/hydratedDeployments/{hydrated_deployment}*hydratedDeployments2hydratedDeployment"�
 ListOrchestrationClustersRequestL
parent (	B<�A�A53telcoautomation.googleapis.com/OrchestrationCluster
	page_size (

page_token (	
filter (	
order_by (	"�
!ListOrchestrationClustersResponseU
orchestration_clusters (25.google.cloud.telcoautomation.v1.OrchestrationCluster
next_page_token (	
unreachable (	"l
GetOrchestrationClusterRequestJ
name (	B<�A�A5
3telcoautomation.googleapis.com/OrchestrationCluster"�
!CreateOrchestrationClusterRequestL
parent (	B<�A�A53telcoautomation.googleapis.com/OrchestrationCluster&
orchestration_cluster_id (	B�AZ
orchestration_cluster (25.google.cloud.telcoautomation.v1.OrchestrationClusterB�A

request_id (	B�A"�
!DeleteOrchestrationClusterRequestJ
name (	B<�A�A5
3telcoautomation.googleapis.com/OrchestrationCluster

request_id (	B�A"�
ListEdgeSlmsRequest?
parent (	B/�A�A(&telcoautomation.googleapis.com/EdgeSlm
	page_size (

page_token (	
filter (	
order_by (	"�
ListEdgeSlmsResponse;
	edge_slms (2(.google.cloud.telcoautomation.v1.EdgeSlm
next_page_token (	
unreachable (	"R
GetEdgeSlmRequest=
name (	B/�A�A(
&telcoautomation.googleapis.com/EdgeSlm"�
CreateEdgeSlmRequest?
parent (	B/�A�A(&telcoautomation.googleapis.com/EdgeSlm
edge_slm_id (	B�A@
edge_slm (2(.google.cloud.telcoautomation.v1.EdgeSlmB�A

request_id (	B�A"o
DeleteEdgeSlmRequest=
name (	B/�A�A(
&telcoautomation.googleapis.com/EdgeSlm

request_id (	B�A"�
CreateBlueprintRequestA
parent (	B1�A�A*(telcoautomation.googleapis.com/Blueprint
blueprint_id (	B�AC
	blueprint (2*.google.cloud.telcoautomation.v1.BlueprintB�A"�
UpdateBlueprintRequestC
	blueprint (2*.google.cloud.telcoautomation.v1.BlueprintB�A5
update_mask (2.google.protobuf.FieldMaskB�A"�
GetBlueprintRequest?
name (	B1�A�A*
(telcoautomation.googleapis.com/BlueprintB
view (2..google.cloud.telcoautomation.v1.BlueprintViewB�A"Y
DeleteBlueprintRequest?
name (	B1�A�A*
(telcoautomation.googleapis.com/Blueprint"�
ListBlueprintsRequestA
parent (	B1�A�A*(telcoautomation.googleapis.com/Blueprint
filter (	B�A
	page_size (B�A

page_token (	B�A"q
ListBlueprintsResponse>

blueprints (2*.google.cloud.telcoautomation.v1.Blueprint
next_page_token (	"Z
ApproveBlueprintRequest?
name (	B1�A�A*
(telcoautomation.googleapis.com/Blueprint"Z
ProposeBlueprintRequest?
name (	B1�A�A*
(telcoautomation.googleapis.com/Blueprint"Y
RejectBlueprintRequest?
name (	B1�A�A*
(telcoautomation.googleapis.com/Blueprint"�
ListBlueprintRevisionsRequest?
name (	B1�A�A*
(telcoautomation.googleapis.com/Blueprint
	page_size (

page_token (	"y
ListBlueprintRevisionsResponse>

blueprints (2*.google.cloud.telcoautomation.v1.Blueprint
next_page_token (	"�
SearchBlueprintRevisionsRequestA
parent (	B1�A�A*(telcoautomation.googleapis.com/Blueprint
query (	B�A
	page_size (B�A

page_token (	B�A"{
 SearchBlueprintRevisionsResponse>

blueprints (2*.google.cloud.telcoautomation.v1.Blueprint
next_page_token (	"a
DiscardBlueprintChangesRequest?
name (	B1�A�A*
(telcoautomation.googleapis.com/Blueprint"!
DiscardBlueprintChangesResponse"�
ListPublicBlueprintsRequestG
parent (	B7�A�A0.telcoautomation.googleapis.com/PublicBlueprint
	page_size (B�A

page_token (	B�A"�
ListPublicBlueprintsResponseK
public_blueprints (20.google.cloud.telcoautomation.v1.PublicBlueprint
next_page_token (	B�A"b
GetPublicBlueprintRequestE
name (	B7�A�A0
.telcoautomation.googleapis.com/PublicBlueprint"�
CreateDeploymentRequestB
parent (	B2�A�A+)telcoautomation.googleapis.com/Deployment
deployment_id (	B�AE

deployment (2+.google.cloud.telcoautomation.v1.DeploymentB�A"�
UpdateDeploymentRequestE

deployment (2+.google.cloud.telcoautomation.v1.DeploymentB�A5
update_mask (2.google.protobuf.FieldMaskB�A"�
GetDeploymentRequest@
name (	B2�A�A+
)telcoautomation.googleapis.com/DeploymentC
view (2/.google.cloud.telcoautomation.v1.DeploymentViewB�A"[
RemoveDeploymentRequest@
name (	B2�A�A+
)telcoautomation.googleapis.com/Deployment"�
ListDeploymentsRequestB
parent (	B2�A�A+)telcoautomation.googleapis.com/Deployment
filter (	B�A
	page_size (B�A

page_token (	B�A"t
ListDeploymentsResponse@
deployments (2+.google.cloud.telcoautomation.v1.Deployment
next_page_token (	"�
ListDeploymentRevisionsRequest@
name (	B2�A�A+
)telcoautomation.googleapis.com/Deployment
	page_size (B�A

page_token (	B�A"|
ListDeploymentRevisionsResponse@
deployments (2+.google.cloud.telcoautomation.v1.Deployment
next_page_token (	"�
 SearchDeploymentRevisionsRequestA
parent (	B1�A�A*(telcoautomation.googleapis.com/Blueprint
query (	B�A
	page_size (B�A

page_token (	B�A"~
!SearchDeploymentRevisionsResponse@
deployments (2+.google.cloud.telcoautomation.v1.Deployment
next_page_token (	"c
DiscardDeploymentChangesRequest@
name (	B2�A�A+
)telcoautomation.googleapis.com/Deployment""
 DiscardDeploymentChangesResponse"Z
ApplyDeploymentRequest@
name (	B2�A�A+
)telcoautomation.googleapis.com/Deployment"b
ComputeDeploymentStatusRequest@
name (	B2�A�A+
)telcoautomation.googleapis.com/Deployment"�
ComputeDeploymentStatusResponse
name (	H
aggregated_status (2\'.google.cloud.telcoautomation.v1.StatusB�AP
resource_statuses (2/.google.cloud.telcoautomation.v1.ResourceStatusB�A"x
RollbackDeploymentRequest@
name (	B2�A�A+
)telcoautomation.googleapis.com/Deployment
revision_id (	B�A"�
OperationMetadata5
create_time (2.google.protobuf.TimestampB�A2
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A$
requested_cancellation (B�A
api_version (	B�A"h
GetHydratedDeploymentRequestH
name (	B:�A�A3
1telcoautomation.googleapis.com/HydratedDeployment"�
ListHydratedDeploymentsRequestJ
parent (	B:�A�A31telcoautomation.googleapis.com/HydratedDeployment
	page_size (B�A

page_token (	B�A"�
ListHydratedDeploymentsResponseQ
hydrated_deployments (23.google.cloud.telcoautomation.v1.HydratedDeployment
next_page_token (	"�
UpdateHydratedDeploymentRequestV
hydrated_deployment (23.google.cloud.telcoautomation.v1.HydratedDeploymentB�A5
update_mask (2.google.protobuf.FieldMaskB�A"j
ApplyHydratedDeploymentRequestH
name (	B:�A�A3
1telcoautomation.googleapis.com/HydratedDeployment"�
ManagementConfig_
standard_management_config (29.google.cloud.telcoautomation.v1.StandardManagementConfigH W
full_management_config (25.google.cloud.telcoautomation.v1.FullManagementConfigH B
oneof_config"�
StandardManagementConfig
network (	B�A
subnet (	B�A$
master_ipv4_cidr_block (	B�A 
cluster_cidr_block (	B�A!
services_cidr_block (	B�A!
cluster_named_range (	B�A"
services_named_range (	B�Ap
!master_authorized_networks_config (2?.google.cloud.telcoautomation.v1.MasterAuthorizedNetworksConfigB�A"�
FullManagementConfig
network (	B�A
subnet (	B�A$
master_ipv4_cidr_block (	B�A 
cluster_cidr_block (	B�A!
services_cidr_block (	B�A!
cluster_named_range (	B�A"
services_named_range (	B�Ap
!master_authorized_networks_config (2?.google.cloud.telcoautomation.v1.MasterAuthorizedNetworksConfigB�A"�
MasterAuthorizedNetworksConfigd
cidr_blocks (2I.google.cloud.telcoautomation.v1.MasterAuthorizedNetworksConfig.CidrBlockB�AA
	CidrBlock
display_name (	B�A

cidr_block (	B�A"`
File
path (	B�A
content (	B�A
deleted (B�A
editable (B�A"�
ResourceStatus
name (	
resource_namespace (	
group (	
version (	
kind (	J
resource_type (2-.google.cloud.telcoautomation.v1.ResourceTypeB�A=
status (2\'.google.cloud.telcoautomation.v1.StatusB�AO
nf_deploy_status (2/.google.cloud.telcoautomation.v1.NFDeployStatusB�A"�
NFDeployStatus
targeted_nfs (B�A
	ready_nfs (B�AH
sites (23.google.cloud.telcoautomation.v1.NFDeploySiteStatusB�A"�
NFDeploySiteStatus
site (	B�A
pending_deletion (B�AI
	hydration (20.google.cloud.telcoautomation.v1.HydrationStatusB�AG
workload (2/.google.cloud.telcoautomation.v1.WorkloadStatusB�A"q
HydrationStatusH
site_version (2,.google.cloud.telcoautomation.v1.SiteVersionB�A
status (	B�A"W
SiteVersion
	nf_vendor (	B�A
nf_type (	B�A

nf_version (	B�A"p
WorkloadStatusH
site_version (2,.google.cloud.telcoautomation.v1.SiteVersionB�A
status (	B�A*b
BlueprintView
BLUEPRINT_VIEW_UNSPECIFIED 
BLUEPRINT_VIEW_BASIC
BLUEPRINT_VIEW_FULL*f
DeploymentView
DEPLOYMENT_VIEW_UNSPECIFIED 
DEPLOYMENT_VIEW_BASIC
DEPLOYMENT_VIEW_FULL*^
ResourceType
RESOURCE_TYPE_UNSPECIFIED 
NF_DEPLOY_RESOURCE
DEPLOYMENT_RESOURCE*�
Status
STATUS_UNSPECIFIED 
STATUS_IN_PROGRESS
STATUS_ACTIVE
STATUS_FAILED
STATUS_DELETING
STATUS_DELETED
STATUS_PEERING

STATUS_NOT_APPLICABLE*�
DeploymentLevel 
DEPLOYMENT_LEVEL_UNSPECIFIED 
	HYDRATION
SINGLE_DEPLOYMENT
MULTI_DEPLOYMENT
WORKLOAD_CLUSTER_DEPLOYMENT2�C
TelcoAutomation�
ListOrchestrationClustersA.google.cloud.telcoautomation.v1.ListOrchestrationClustersRequestB.google.cloud.telcoautomation.v1.ListOrchestrationClustersResponse"J�Aparent���;9/v1/{parent=projects/*/locations/*}/orchestrationClusters�
GetOrchestrationCluster?.google.cloud.telcoautomation.v1.GetOrchestrationClusterRequest5.google.cloud.telcoautomation.v1.OrchestrationCluster"H�Aname���;9/v1/{name=projects/*/locations/*/orchestrationClusters/*}�
CreateOrchestrationClusterB.google.cloud.telcoautomation.v1.CreateOrchestrationClusterRequest.google.longrunning.Operation"��A)
OrchestrationClusterOperationMetadata�A5parent,orchestration_cluster,orchestration_cluster_id���R"9/v1/{parent=projects/*/locations/*}/orchestrationClusters:orchestration_cluster�
DeleteOrchestrationClusterB.google.cloud.telcoautomation.v1.DeleteOrchestrationClusterRequest.google.longrunning.Operation"u�A*
google.protobuf.EmptyOperationMetadata�Aname���;*9/v1/{name=projects/*/locations/*/orchestrationClusters/*}�
ListEdgeSlms4.google.cloud.telcoautomation.v1.ListEdgeSlmsRequest5.google.cloud.telcoautomation.v1.ListEdgeSlmsResponse"=�Aparent���.,/v1/{parent=projects/*/locations/*}/edgeSlms�

GetEdgeSlm2.google.cloud.telcoautomation.v1.GetEdgeSlmRequest(.google.cloud.telcoautomation.v1.EdgeSlm";�Aname���.,/v1/{name=projects/*/locations/*/edgeSlms/*}�
CreateEdgeSlm5.google.cloud.telcoautomation.v1.CreateEdgeSlmRequest.google.longrunning.Operation"{�A
EdgeSlmOperationMetadata�Aparent,edge_slm,edge_slm_id���8",/v1/{parent=projects/*/locations/*}/edgeSlms:edge_slm�
DeleteEdgeSlm5.google.cloud.telcoautomation.v1.DeleteEdgeSlmRequest.google.longrunning.Operation"h�A*
google.protobuf.EmptyOperationMetadata�Aname���.*,/v1/{name=projects/*/locations/*/edgeSlms/*}�
CreateBlueprint7.google.cloud.telcoautomation.v1.CreateBlueprintRequest*.google.cloud.telcoautomation.v1.Blueprint"y�Aparent,blueprint,blueprint_id���S"F/v1/{parent=projects/*/locations/*/orchestrationClusters/*}/blueprints:	blueprint�
UpdateBlueprint7.google.cloud.telcoautomation.v1.UpdateBlueprintRequest*.google.cloud.telcoautomation.v1.Blueprint"{�Ablueprint,update_mask���]2P/v1/{blueprint.name=projects/*/locations/*/orchestrationClusters/*/blueprints/*}:	blueprint�
GetBlueprint4.google.cloud.telcoautomation.v1.GetBlueprintRequest*.google.cloud.telcoautomation.v1.Blueprint"U�Aname���HF/v1/{name=projects/*/locations/*/orchestrationClusters/*/blueprints/*}�
DeleteBlueprint7.google.cloud.telcoautomation.v1.DeleteBlueprintRequest.google.protobuf.Empty"U�Aname���H*F/v1/{name=projects/*/locations/*/orchestrationClusters/*/blueprints/*}�
ListBlueprints6.google.cloud.telcoautomation.v1.ListBlueprintsRequest7.google.cloud.telcoautomation.v1.ListBlueprintsResponse"W�Aparent���HF/v1/{parent=projects/*/locations/*/orchestrationClusters/*}/blueprints�
ApproveBlueprint8.google.cloud.telcoautomation.v1.ApproveBlueprintRequest*.google.cloud.telcoautomation.v1.Blueprint"`�Aname���S"N/v1/{name=projects/*/locations/*/orchestrationClusters/*/blueprints/*}:approve:*�
ProposeBlueprint8.google.cloud.telcoautomation.v1.ProposeBlueprintRequest*.google.cloud.telcoautomation.v1.Blueprint"`�Aname���S"N/v1/{name=projects/*/locations/*/orchestrationClusters/*/blueprints/*}:propose:*�
RejectBlueprint7.google.cloud.telcoautomation.v1.RejectBlueprintRequest*.google.cloud.telcoautomation.v1.Blueprint"_�Aname���R"M/v1/{name=projects/*/locations/*/orchestrationClusters/*/blueprints/*}:reject:*�
ListBlueprintRevisions>.google.cloud.telcoautomation.v1.ListBlueprintRevisionsRequest?.google.cloud.telcoautomation.v1.ListBlueprintRevisionsResponse"c�Aname���VT/v1/{name=projects/*/locations/*/orchestrationClusters/*/blueprints/*}:listRevisions�
SearchBlueprintRevisions@.google.cloud.telcoautomation.v1.SearchBlueprintRevisionsRequestA.google.cloud.telcoautomation.v1.SearchBlueprintRevisionsResponse"m�Aparent,query���XV/v1/{parent=projects/*/locations/*/orchestrationClusters/*}/blueprints:searchRevisions�
SearchDeploymentRevisionsA.google.cloud.telcoautomation.v1.SearchDeploymentRevisionsRequestB.google.cloud.telcoautomation.v1.SearchDeploymentRevisionsResponse"n�Aparent,query���YW/v1/{parent=projects/*/locations/*/orchestrationClusters/*}/deployments:searchRevisions�
DiscardBlueprintChanges?.google.cloud.telcoautomation.v1.DiscardBlueprintChangesRequest@.google.cloud.telcoautomation.v1.DiscardBlueprintChangesResponse"`�Aname���S"N/v1/{name=projects/*/locations/*/orchestrationClusters/*/blueprints/*}:discard:*�
ListPublicBlueprints<.google.cloud.telcoautomation.v1.ListPublicBlueprintsRequest=.google.cloud.telcoautomation.v1.ListPublicBlueprintsResponse"E�Aparent���64/v1/{parent=projects/*/locations/*}/publicBlueprints�
GetPublicBlueprint:.google.cloud.telcoautomation.v1.GetPublicBlueprintRequest0.google.cloud.telcoautomation.v1.PublicBlueprint"C�Aname���64/v1/{name=projects/*/locations/*/publicBlueprints/*}�
CreateDeployment8.google.cloud.telcoautomation.v1.CreateDeploymentRequest+.google.cloud.telcoautomation.v1.Deployment"}�Aparent,deployment,deployment_id���U"G/v1/{parent=projects/*/locations/*/orchestrationClusters/*}/deployments:
deployment�
UpdateDeployment8.google.cloud.telcoautomation.v1.UpdateDeploymentRequest+.google.cloud.telcoautomation.v1.Deployment"�Adeployment,update_mask���`2R/v1/{deployment.name=projects/*/locations/*/orchestrationClusters/*/deployments/*}:
deployment�
GetDeployment5.google.cloud.telcoautomation.v1.GetDeploymentRequest+.google.cloud.telcoautomation.v1.Deployment"V�Aname���IG/v1/{name=projects/*/locations/*/orchestrationClusters/*/deployments/*}�
RemoveDeployment8.google.cloud.telcoautomation.v1.RemoveDeploymentRequest.google.protobuf.Empty"`�Aname���S"N/v1/{name=projects/*/locations/*/orchestrationClusters/*/deployments/*}:remove:*�
ListDeployments7.google.cloud.telcoautomation.v1.ListDeploymentsRequest8.google.cloud.telcoautomation.v1.ListDeploymentsResponse"X�Aparent���IG/v1/{parent=projects/*/locations/*/orchestrationClusters/*}/deployments�
ListDeploymentRevisions?.google.cloud.telcoautomation.v1.ListDeploymentRevisionsRequest@.google.cloud.telcoautomation.v1.ListDeploymentRevisionsResponse"d�Aname���WU/v1/{name=projects/*/locations/*/orchestrationClusters/*/deployments/*}:listRevisions�
DiscardDeploymentChanges@.google.cloud.telcoautomation.v1.DiscardDeploymentChangesRequestA.google.cloud.telcoautomation.v1.DiscardDeploymentChangesResponse"a�Aname���T"O/v1/{name=projects/*/locations/*/orchestrationClusters/*/deployments/*}:discard:*�
ApplyDeployment7.google.cloud.telcoautomation.v1.ApplyDeploymentRequest+.google.cloud.telcoautomation.v1.Deployment"_�Aname���R"M/v1/{name=projects/*/locations/*/orchestrationClusters/*/deployments/*}:apply:*�
ComputeDeploymentStatus?.google.cloud.telcoautomation.v1.ComputeDeploymentStatusRequest@.google.cloud.telcoautomation.v1.ComputeDeploymentStatusResponse"n�Aname���a_/v1/{name=projects/*/locations/*/orchestrationClusters/*/deployments/*}:computeDeploymentStatus�
RollbackDeployment:.google.cloud.telcoautomation.v1.RollbackDeploymentRequest+.google.cloud.telcoautomation.v1.Deployment"n�Aname,revision_id���U"P/v1/{name=projects/*/locations/*/orchestrationClusters/*/deployments/*}:rollback:*�
GetHydratedDeployment=.google.cloud.telcoautomation.v1.GetHydratedDeploymentRequest3.google.cloud.telcoautomation.v1.HydratedDeployment"l�Aname���_]/v1/{name=projects/*/locations/*/orchestrationClusters/*/deployments/*/hydratedDeployments/*}�
ListHydratedDeployments?.google.cloud.telcoautomation.v1.ListHydratedDeploymentsRequest@.google.cloud.telcoautomation.v1.ListHydratedDeploymentsResponse"n�Aparent���_]/v1/{parent=projects/*/locations/*/orchestrationClusters/*/deployments/*}/hydratedDeployments�
UpdateHydratedDeployment@.google.cloud.telcoautomation.v1.UpdateHydratedDeploymentRequest3.google.cloud.telcoautomation.v1.HydratedDeployment"��Ahydrated_deployment,update_mask����2q/v1/{hydrated_deployment.name=projects/*/locations/*/orchestrationClusters/*/deployments/*/hydratedDeployments/*}:hydrated_deployment�
ApplyHydratedDeployment?.google.cloud.telcoautomation.v1.ApplyHydratedDeploymentRequest3.google.cloud.telcoautomation.v1.HydratedDeployment"u�Aname���h"c/v1/{name=projects/*/locations/*/orchestrationClusters/*/deployments/*/hydratedDeployments/*}:apply:*R�Atelcoautomation.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
#com.google.cloud.telcoautomation.v1BTelcoautomationProtoPZMcloud.google.com/go/telcoautomation/apiv1/telcoautomationpb;telcoautomationpb�Google.Cloud.TelcoAutomation.V1�Google\\Cloud\\TelcoAutomation\\V1�"Google::Cloud::TelcoAutomation::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

