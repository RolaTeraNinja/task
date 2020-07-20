<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('doctors', function(Blueprint $table) {
			$table->foreign('department_id')->references('id')->on('medical_departments')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('doctor_services', function(Blueprint $table) {
			$table->foreign('doctor_id')->references('id')->on('doctors')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('doctor_services', function(Blueprint $table) {
			$table->foreign('service_id')->references('id')->on('services')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('reservations', function(Blueprint $table) {
			$table->foreign('service_id')->references('id')->on('services')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('reservations', function(Blueprint $table) {
			$table->foreign('doctor_id')->references('id')->on('doctors')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('reservations', function(Blueprint $table) {
			$table->foreign('patient_id')->references('id')->on('patients')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('copy_reservations', function(Blueprint $table) {
			$table->foreign('doctor_id')->references('id')->on('doctors')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('copy_reservations', function(Blueprint $table) {
			$table->foreign('patient_id')->references('id')->on('patients')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('copy_reservations', function(Blueprint $table) {
			$table->foreign('reservation_id')->references('id')->on('reservations')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('A_medicals', function(Blueprint $table) {
			$table->foreign('reservation_id')->references('id')->on('reservations')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('doctor_available_times', function(Blueprint $table) {
			$table->foreign('doctor_id')->references('id')->on('doctors')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('xray_center_types', function(Blueprint $table) {
			$table->foreign('type_id')->references('id')->on('xray_types')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('xray_center_types', function(Blueprint $table) {
			$table->foreign('center_id')->references('id')->on('xray_centers')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('xray_center_types', function(Blueprint $table) {
			$table->foreign('service_id')->references('id')->on('services')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('xray_center_times', function(Blueprint $table) {
			$table->foreign('center_id')->references('id')->on('xray_centers')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('xray_reservation', function(Blueprint $table) {
			$table->foreign('patient_id')->references('id')->on('patients')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('xray_reservation', function(Blueprint $table) {
			$table->foreign('center_id')->references('id')->on('xray_centers')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('xray_reservation', function(Blueprint $table) {
			$table->foreign('xray_type_id')->references('id')->on('xray_center_types')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('lab_analysis_type', function(Blueprint $table) {
			$table->foreign('lab_id')->references('id')->on('medical_labs')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('lab_analysis_type', function(Blueprint $table) {
			$table->foreign('analysis_type_id')->references('id')->on('analysis_types')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('lab_analysis_type', function(Blueprint $table) {
			$table->foreign('service_id')->references('id')->on('services')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('lab_times', function(Blueprint $table) {
			$table->foreign('lab_id')->references('id')->on('medical_labs')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('lab_reservation', function(Blueprint $table) {
			$table->foreign('patient_id')->references('id')->on('patients')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('lab_reservation', function(Blueprint $table) {
			$table->foreign('lab_id')->references('id')->on('medical_labs')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('lab_reservation', function(Blueprint $table) {
			$table->foreign('lab_analysis_id')->references('id')->on('lab_analysis_type')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('pharmcy_service', function(Blueprint $table) {
			$table->foreign('pharmcy_id')->references('id')->on('pharmacies')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('pharmcy_service', function(Blueprint $table) {
			$table->foreign('service_id')->references('id')->on('services')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('medicine_orders', function(Blueprint $table) {
			$table->foreign('pharmcy_id')->references('id')->on('pharmacies')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('medicine_orders', function(Blueprint $table) {
			$table->foreign('patient_id')->references('id')->on('patients')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('emergency_orders', function(Blueprint $table) {
			$table->foreign('patient_id')->references('id')->on('patients')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('emergency_orders', function(Blueprint $table) {
			$table->foreign('medical_department_id')->references('id')->on('medical_departments')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('accepted_emergency', function(Blueprint $table) {
			$table->foreign('doctor_id')->references('id')->on('doctors')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('accepted_emergency', function(Blueprint $table) {
			$table->foreign('order_id')->references('id')->on('emergency_orders')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('patient_emergency_choice', function(Blueprint $table) {
			$table->foreign('patient_id')->references('id')->on('patients')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('patient_emergency_choice', function(Blueprint $table) {
			$table->foreign('choice_id')->references('id')->on('accepted_emergency')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('rating', function(Blueprint $table) {
			$table->foreign('patient_id')->references('id')->on('patients')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('reviewing', function(Blueprint $table) {
			$table->foreign('patient_id')->references('id')->on('patients')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('doctors', function(Blueprint $table) {
			$table->dropForeign('doctors_department_id_foreign');
		});
		Schema::table('doctor_services', function(Blueprint $table) {
			$table->dropForeign('doctor_services_doctor_id_foreign');
		});
		Schema::table('doctor_services', function(Blueprint $table) {
			$table->dropForeign('doctor_services_service_id_foreign');
		});
		Schema::table('reservations', function(Blueprint $table) {
			$table->dropForeign('reservations_service_id_foreign');
		});
		Schema::table('reservations', function(Blueprint $table) {
			$table->dropForeign('reservations_doctor_id_foreign');
		});
		Schema::table('reservations', function(Blueprint $table) {
			$table->dropForeign('reservations_patient_id_foreign');
		});
		Schema::table('copy_reservations', function(Blueprint $table) {
			$table->dropForeign('copy_reservations_doctor_id_foreign');
		});
		Schema::table('copy_reservations', function(Blueprint $table) {
			$table->dropForeign('copy_reservations_patient_id_foreign');
		});
		Schema::table('copy_reservations', function(Blueprint $table) {
			$table->dropForeign('copy_reservations_reservation_id_foreign');
		});
		Schema::table('A_medicals', function(Blueprint $table) {
			$table->dropForeign('A_medicals_reservation_id_foreign');
		});
		Schema::table('doctor_available_times', function(Blueprint $table) {
			$table->dropForeign('doctor_available_times_doctor_id_foreign');
		});
		Schema::table('xray_center_types', function(Blueprint $table) {
			$table->dropForeign('xray_center_types_type_id_foreign');
		});
		Schema::table('xray_center_types', function(Blueprint $table) {
			$table->dropForeign('xray_center_types_center_id_foreign');
		});
		Schema::table('xray_center_types', function(Blueprint $table) {
			$table->dropForeign('xray_center_types_service_id_foreign');
		});
		Schema::table('xray_center_times', function(Blueprint $table) {
			$table->dropForeign('xray_center_times_center_id_foreign');
		});
		Schema::table('xray_reservation', function(Blueprint $table) {
			$table->dropForeign('xray_reservation_patient_id_foreign');
		});
		Schema::table('xray_reservation', function(Blueprint $table) {
			$table->dropForeign('xray_reservation_center_id_foreign');
		});
		Schema::table('xray_reservation', function(Blueprint $table) {
			$table->dropForeign('xray_reservation_xray_type_id_foreign');
		});
		Schema::table('lab_analysis_type', function(Blueprint $table) {
			$table->dropForeign('lab_analysis_type_lab_id_foreign');
		});
		Schema::table('lab_analysis_type', function(Blueprint $table) {
			$table->dropForeign('lab_analysis_type_analysis_type_id_foreign');
		});
		Schema::table('lab_analysis_type', function(Blueprint $table) {
			$table->dropForeign('lab_analysis_type_service_id_foreign');
		});
		Schema::table('lab_times', function(Blueprint $table) {
			$table->dropForeign('lab_times_lab_id_foreign');
		});
		Schema::table('lab_reservation', function(Blueprint $table) {
			$table->dropForeign('lab_reservation_patient_id_foreign');
		});
		Schema::table('lab_reservation', function(Blueprint $table) {
			$table->dropForeign('lab_reservation_lab_id_foreign');
		});
		Schema::table('lab_reservation', function(Blueprint $table) {
			$table->dropForeign('lab_reservation_lab_analysis_id_foreign');
		});
		Schema::table('pharmcy_service', function(Blueprint $table) {
			$table->dropForeign('pharmcy_service_pharmcy_id_foreign');
		});
		Schema::table('pharmcy_service', function(Blueprint $table) {
			$table->dropForeign('pharmcy_service_service_id_foreign');
		});
		Schema::table('medicine_orders', function(Blueprint $table) {
			$table->dropForeign('medicine_orders_pharmcy_id_foreign');
		});
		Schema::table('medicine_orders', function(Blueprint $table) {
			$table->dropForeign('medicine_orders_patient_id_foreign');
		});
		Schema::table('emergency_orders', function(Blueprint $table) {
			$table->dropForeign('emergency_orders_patient_id_foreign');
		});
		Schema::table('emergency_orders', function(Blueprint $table) {
			$table->dropForeign('emergency_orders_medical_department_id_foreign');
		});
		Schema::table('accepted_emergency', function(Blueprint $table) {
			$table->dropForeign('accepted_emergency_doctor_id_foreign');
		});
		Schema::table('accepted_emergency', function(Blueprint $table) {
			$table->dropForeign('accepted_emergency_order_id_foreign');
		});
		Schema::table('patient_emergency_choice', function(Blueprint $table) {
			$table->dropForeign('patient_emergency_choice_patient_id_foreign');
		});
		Schema::table('patient_emergency_choice', function(Blueprint $table) {
			$table->dropForeign('patient_emergency_choice_choice_id_foreign');
		});
		Schema::table('rating', function(Blueprint $table) {
			$table->dropForeign('rating_patient_id_foreign');
		});
		Schema::table('reviewing', function(Blueprint $table) {
			$table->dropForeign('reviewing_patient_id_foreign');
		});
	}
}