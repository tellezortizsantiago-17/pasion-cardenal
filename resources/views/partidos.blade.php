@extends('layouts.app')

@section('contenido')
    <div>
        <h2 style="color: #b71c1c; border-bottom: 2px solid #d32f2f; padding-bottom: 8px; margin-top: 0;">Calendario Cardenal ⚽</h2>
        <p style="color: #666; margin-bottom: 20px;">Próximos encuentros oficiales del Primer Campeón:</p>

        <!-- Contenedor en cuadrícula -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 15px;">
            
            <!-- Partido 1 -->
            <div style="background: #fff; border: 1px solid #ddd; border-left: 5px solid #b71c1c; padding: 15px; border-radius: 6px; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">
                <span style="font-size: 12px; color: #777; font-weight: bold;">CONMEBOL Sudamericana · Cuartos de final · Partido 1 de 2</span>
                <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 8px;">
                    <div>
                        <p style="margin: 4px 0; font-weight: bold; color: #333;">🦁 Santa Fe</p>
                        <p style="margin: 4px 0; font-weight: bold; color: #333;">⚽ Vasco da Gama</p>
                    </div>
                    <div style="text-align: right;">
                        <span style="display: block; font-size: 13px; font-weight: bold; color: #b71c1c;">Mañana</span>
                        <span style="font-size: 12px; color: #555;">5:00 p. m.</span>
                    </div>
                </div>
            </div>

            <!-- Partido 2 -->
            <div style="background: #fff; border: 1px solid #ddd; border-left: 5px solid #b71c1c; padding: 15px; border-radius: 6px; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">
                <span style="font-size: 12px; color: #777; font-weight: bold;">Liga Dimayor · Fase de grupos · Jornada 10 de 19</span>
                <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 8px;">
                    <div>
                        <p style="margin: 4px 0; font-weight: bold; color: #333;">🦁 Santa Fe</p>
                        <p style="margin: 4px 0; font-weight: bold; color: #333;">⚽ Tolima</p>
                    </div>
                    <div style="text-align: right;">
                        <span style="display: block; font-size: 13px; font-weight: bold; color: #b71c1c;">Dom, 13/9</span>
                        <span style="font-size: 12px; color: #555;">2:00 p. m.</span>
                    </div>
                </div>
            </div>

            <!-- Partido 3 -->
            <div style="background: #fff; border: 1px solid #ddd; border-left: 5px solid #b71c1c; padding: 15px; border-radius: 6px; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">
                <span style="font-size: 12px; color: #777; font-weight: bold;">Liga Dimayor · Fase de grupos · Jornada 3 de 19</span>
                <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 8px;">
                    <div>
                        <p style="margin: 4px 0; font-weight: bold; color: #333;">⚽ Deportivo Pereira</p>
                        <p style="margin: 4px 0; font-weight: bold; color: #333;">🦁 Santa Fe</p>
                    </div>
                    <div style="text-align: right;">
                        <span style="display: block; font-size: 13px; font-weight: bold; color: #b71c1c;">Mar, 15/9</span>
                        <span style="font-size: 12px; color: #555;">3:00 p. m.</span>
                    </div>
                </div>
            </div>

            <!-- Partido 4 -->
            <div style="background: #fff; border: 1px solid #ddd; border-left: 5px solid #b71c1c; padding: 15px; border-radius: 6px; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">
                <span style="font-size: 12px; color: #777; font-weight: bold;">CONMEBOL Sudamericana · Cuartos · Partido 2 de 2</span>
                <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 8px;">
                    <div>
                        <p style="margin: 4px 0; font-weight: bold; color: #333;">⚽ Vasco da Gama</p>
                        <p style="margin: 4px 0; font-weight: bold; color: #333;">🦁 Santa Fe</p>
                    </div>
                    <div style="text-align: right;">
                        <span style="display: block; font-size: 13px; font-weight: bold; color: #b71c1c;">Mar, 15/9</span>
                        <span style="font-size: 12px; color: #555;">5:00 p. m.</span>
                    </div>
                </div>
            </div>

            <!-- Partido 5 -->
            <div style="background: #fff; border: 1px solid #ddd; border-left: 5px solid #b71c1c; padding: 15px; border-radius: 6px; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">
                <span style="font-size: 12px; color: #777; font-weight: bold;">Liga Dimayor · Fase de grupos · Jornada 11 de 19</span>
                <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 8px;">
                    <div>
                        <p style="margin: 4px 0; font-weight: bold; color: #333;">⚽ Alianza</p>
                        <p style="margin: 4px 0; font-weight: bold; color: #333;">🦁 Santa Fe</p>
                    </div>
                    <div style="text-align: right;">
                        <span style="display: block; font-size: 13px; font-weight: bold; color: #b71c1c;">Sáb, 19/9</span>
                        <span style="font-size: 12px; color: #555;">4:05 p. m.</span>
                    </div>
                </div>
            </div>

            <!-- Partido 6 -->
            <div style="background: #fff; border: 1px solid #ddd; border-left: 5px solid #b71c1c; padding: 15px; border-radius: 6px; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">
                <span style="font-size: 12px; color: #777; font-weight: bold;">Liga Dimayor · Fase de grupos · Jornada 12 de 19</span>
                <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 8px;">
                    <div>
                        <p style="margin: 4px 0; font-weight: bold; color: #333;">🦁 Santa Fe</p>
                        <p style="margin: 4px 0; font-weight: bold; color: #333;">⚽ Deportivo Cali</p>
                    </div>
                    <div style="text-align: right;">
                        <span style="display: block; font-size: 13px; font-weight: bold; color: #b71c1c;">22/9</span>
                        <span style="font-size: 12px; color: #555;">8:00 p. m.</span>
                    </div>
                </div>
            </div>

            <!-- Partido 7 -->
            <div style="background: #fff; border: 1px solid #ddd; border-left: 5px solid #b71c1c; padding: 15px; border-radius: 6px; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">
                <span style="font-size: 12px; color: #777; font-weight: bold;">Liga Dimayor · Fase de grupos · Jornada 13 de 19</span>
                <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 8px;">
                    <div>
                        <p style="margin: 4px 0; font-weight: bold; color: #333;">⚽ Medellín</p>
                        <p style="margin: 4px 0; font-weight: bold; color: #333;">🦁 Santa Fe</p>
                    </div>
                    <div style="text-align: right;">
                        <span style="display: block; font-size: 13px; font-weight: bold; color: #b71c1c;">3/10</span>
                        <span style="font-size: 12px; color: #555;">8:15 p. m.</span>
                    </div>
                </div>
            </div>

            <!-- Partido 8 -->
            <div style="background: #fff; border: 1px solid #ddd; border-left: 5px solid #b71c1c; padding: 15px; border-radius: 6px; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">
                <span style="font-size: 12px; color: #777; font-weight: bold;">Liga Dimayor · Fase de grupos · Jornada 14 de 19</span>
                <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 8px;">
                    <div>
                        <p style="margin: 4px 0; font-weight: bold; color: #333;">🦁 Santa Fe</p>
                        <p style="margin: 4px 0; font-weight: bold; color: #333;">⚽ Bucaramanga</p>
                    </div>
                    <div style="text-align: right;">
                        <span style="display: block; font-size: 13px; font-weight: bold; color: #b71c1c;">14/10</span>
                        <span style="font-size: 12px; color: #555;">7:00 p. m.</span>
                    </div>
                </div>
            </div>

            <!-- Partido 9 -->
            <div style="background: #fff; border: 1px solid #ddd; border-left: 5px solid #b71c1c; padding: 15px; border-radius: 6px; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">
                <span style="font-size: 12px; color: #777; font-weight: bold;">Liga Dimayor · Fase de grupos · Jornada 15 de 19</span>
                <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 8px;">
                    <div>
                        <p style="margin: 4px 0; font-weight: bold; color: #333;">⚽ Llaneros</p>
                        <p style="margin: 4px 0; font-weight: bold; color: #333;">🦁 Santa Fe</p>
                    </div>
                    <div style="text-align: right;">
                        <span style="display: block; font-size: 13px; font-weight: bold; color: #b71c1c;">18/10</span>
                        <span style="font-size: 12px; color: #555;">5:45 p. m.</span>
                    </div>
                </div>
            </div>

            <!-- Partido 10 -->
            <div style="background: #fff; border: 1px solid #ddd; border-left: 5px solid #b71c1c; padding: 15px; border-radius: 6px; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">
                <span style="font-size: 12px; color: #777; font-weight: bold;">Liga Dimayor · Fase de grupos · Jornada 17 de 19</span>
                <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 8px;">
                    <div>
                        <p style="margin: 4px 0; font-weight: bold; color: #333;">⚽ Cúcuta</p>
                        <p style="margin: 4px 0; font-weight: bold; color: #333;">🦁 Santa Fe</p>
                    </div>
                    <div style="text-align: right;">
                        <span style="display: block; font-size: 13px; font-weight: bold; color: #b71c1c;">31/10</span>
                        <span style="font-size: 12px; color: #555;">4:00 p. m.</span>
                    </div>
                </div>
            </div>

            <!-- Partido 11 -->
            <div style="background: #fff; border: 1px solid #ddd; border-left: 5px solid #b71c1c; padding: 15px; border-radius: 6px; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">
                <span style="font-size: 12px; color: #777; font-weight: bold;">Liga Dimayor · Fase de grupos · Jornada 18 de 19</span>
                <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 8px;">
                    <div>
                        <p style="margin: 4px 0; font-weight: bold; color: #333;">🦁 Santa Fe</p>
                        <p style="margin: 4px 0; font-weight: bold; color: #333;">⚽ Pasto</p>
                    </div>
                    <div style="text-align: right;">
                        <span style="display: block; font-size: 13px; font-weight: bold; color: #b71c1c;">3/11</span>
                        <span style="font-size: 12px; color: #555;">6:15 p. m.</span>
                    </div>
                </div>
            </div>

            <!-- Partido 12 -->
            <div style="background: #fff; border: 1px solid #ddd; border-left: 5px solid #b71c1c; padding: 15px; border-radius: 6px; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">
                <span style="font-size: 12px; color: #777; font-weight: bold;">Liga Dimayor · Fase de grupos · Jornada 19 de 19</span>
                <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 8px;">
                    <div>
                        <p style="margin: 4px 0; font-weight: bold; color: #333;">⚽ Internacional</p>
                        <p style="margin: 4px 0; font-weight: bold; color: #333;">🦁 Santa Fe</p>
                    </div>
                    <div style="text-align: right;">
                        <span style="display: block; font-size: 13px; font-weight: bold; color: #b71c1c;">8/11</span>
                        <span style="font-size: 12px; color: #555;">3:30 p. m.</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection