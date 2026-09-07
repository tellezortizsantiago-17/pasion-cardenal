@extends('layouts.app')

@section('contenido')
    <div>
        <h2 style="color: #b71c1c; border-bottom: 2px solid #d32f2f; padding-bottom: 8px; margin-top: 0;">Calendario Cardenal ⚽</h2>
        <p style="color: #666; margin-bottom: 20px;">Estos son los próximos encuentros programados para el Primer Campeón:</p>

        <div style="display: flex; flex-direction: column; gap: 15px;">
            <!-- Partido 1 -->
            <div style="background: #fff; border: 1px solid #ddd; border-left: 5px solid #b71c1c; padding: 15px 20px; border-radius: 6px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">
                <div>
                    <h4 style="margin: 0 0 5px 0; color: #333; font-size: 18px;">Santa Fe vs Millonarios</h4>
                    <p style="margin: 0; color: #777; font-size: 14px;">📍 Estadio El Campín | 🏆 Liga Local</p>
                </div>
                <span style="background: #ffebee; color: #b71c1c; padding: 6px 12px; border-radius: 20px; font-weight: bold; font-size: 13px;">Próximamente</span>
            </div>

            <!-- Partido 2 -->
            <div style="background: #fff; border: 1px solid #ddd; border-left: 5px solid #b71c1c; padding: 15px 20px; border-radius: 6px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">
                <div>
                    <h4 style="margin: 0 0 5px 0; color: #333; font-size: 18px;">Santa Fe vs Vasco De Gama</h4>
                    <p style="margin: 0; color: #777; font-size: 14px;">📍 Estadio El Campín | 🏆 Amistoso Internacional</p>
                </div>
                <span style="background: #e8f5e9; color: #2e7d32; padding: 6px 12px; border-radius: 20px; font-weight: bold; font-size: 13px;">Confirmado</span>
            </div>
        </div>
    </div>
@endsection